<?php

namespace App\Http\Controllers;

use App\Http\Requests\FriendStoreRequest;
use App\Http\Resources\SessionResource;
use App\Http\Resources\UserResource;
use App\Jobs\PushNotification;
use App\Model\Group;
use App\Model\Session;
use App\Services\FriendService;
use App\User;
use function Composer\Autoload\includeFile;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Pusher\Laravel\Facades\Pusher;

/**
 * @group friends 友達
 */
class FriendController extends Controller
{
    protected $friendService;

    public function __construct(FriendService $friendService)
    {
        $this->friendService = $friendService;
    }

    /**
     * friends.index 友達一覧
     *
     * @responseFile 200 responses/friends.index.200.json
     */
    public function index(Request $request)
    {
        return UserResource::collection($request->user()->friends);
    }

    /**
     * friends.store ◆友達申請する
     *
     * @bodyParam email string required 追加する友達のメールアドレス
     *
     * @responseFile 201 responses/friends.store.201.json
     * @responseFile 409 responses/friends.store.409.json
     */
    public function store(FriendStoreRequest $request)
    {
        // 申請対象者
        $friendRequestUser = User::where('email', $request->email)->first();

        // push通知
        $this->dispatch(new PushNotification($request->user()->username . 'さんからフレンド申請が来ました', $friendRequestUser->deviceTokenArray()));

        return $this->friendService->store($request->user(), $friendRequestUser, $request->email);
    }

    /**
     * friends.show 特定の友達の詳細情報
     *
     * @queryParam friend required 友達のid
     *
     * @responseFile 200 responses/friends.show.200.json
     */
    public function show(Request $request, User $friend)
    {
        return new UserResource($request->user()->friends->where('id', $friend->id)->first());
    }

    /**
     * friends.destory 友達から削除
     *
     * @queryParam friend required 友達のid
     *
     * @responseFile 204 responses/friends.destroy.204.json
     */
    public function destroy(Request $request, User $friend)
    {
        $manager = $request->user();
        $this->friendService->delete($manager, $friend);

        return response(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * friends.block_me_users 申請した中でブロックされているユーザー一覧
     *
     * @responseFile 200 responses/friends.block_me_users.200.json
     */
    public function blockMeUsers(Request $request)
    {
        return UserResource::collection($request->user()->blockMeUsers);
    }

    /**
     * friends.waitingFriends 申請した中で待っているユーザー一覧
     *
     * @responseFile 200 responses/friends.waiting_friends.200.json
     */
    public function waitingFriends(Request $request)
    {
        return UserResource::collection($request->user()->waitingFriends);
    }

    /**
     * friends.blockingUsers 申請してきたけど、ブロックしたユーザー一覧
     *
     * @responseFile 200 responses/friends.blocking_users.200.json
     */
    public function blockingUsers(Request $request)
    {
        if ($request->user()->blockingUsers()->exists()) {
            return UserResource::collection($request->user()->blockingUsers);
        } else {
            return response(null, Response::HTTP_NO_CONTENT);
        }
    }

    /**
     * friends.permittingUsers 自分に申請してきたユーザーで、自分がそれを了承したユーザー（自分をフレンドとしているユーザー一覧）
     *
     * @responseFile 200 responses/friends.permitting.200.json
     */
    public function permittingUsers(Request $request)
    {
        if ($request->user()->permittingUsers()->exists()) {
            return UserResource::collection($request->user()->permittingUsers);
        } else {
            return response(null, Response::HTTP_NO_CONTENT);
        }
    }

    /**
     * friends.friendRequestUsers 自分に申請してきてるけど、まだ返事していない相手一覧
     *
     * @responseFile 200 responses/friends.friend_request_users.200.json
     */
    public function friendRequestUsers(Request $request)
    {
        if ($request->user()->invitingMeUsers()->exists()) {
            return UserResource::collection($request->user()->invitingMeUsers);
        } else {
            return response(null, Response::HTTP_NO_CONTENT);
        }
    }

    /**
     * friends.update_attribute フレンドにつける属性IDを更新する
     * @queryParam friend required フレンドID
     * @bodyParam attribute_id integer required 更新する属性ID
     *
     * @responseFile 200 responses/friends.update_attribute.200.json
     */
    public function updateAttribute(Request $request, User $friend)
    {
        if ($request->attribute_id == null) {
            $request->user()->friends()->updateExistingPivot($friend, [
                'attribute_id' => null
            ]);
        } else {
            // 自分が管理している属性かチェック
            $attribute = $request->user()->managedAttributes()->where('id', $request->attribute_id)->first();
            if (empty($attribute)) {
                return response()->json(['error' => 'その属性は管理していません'], Response::HTTP_CONFLICT);
            }
            $request->user()->friends()->updateExistingPivot($friend, [
                'attribute_id' => $attribute->id
            ]);
        }

        $response = new UserResource($request->user()->friends->where('id', $friend->id)->first());
        // リアルタイム通知
        Pusher::trigger(Controller::ADMIN_CHANNEL, Controller::FRIEND_UPDATE_EVENT, [
            'message' => [
                'user_id' => $request->user()->id,
                'friend_id' => $friend->id
            ]
        ]);

        return $response;
    }

    /**
     * friends.permit 友達申請を許可
     * @bodyParam user_id integer required 友達申請してきてる人のユーザーID
     *
     * @responseFile 200 responses/friends.permit.200.json
     * @responseFile 409 responses/friends.permit.409.json
     */
    public function permit(Request $request)
    {
        // 申請されているか
        if (! $request->user()->invitingMeUsers()->where('id', $request->user_id)->exists()) {
            return response()->json(['error' => 'そのユーザーからは招待されていません'], Response::HTTP_CONFLICT);
        }
        $request->user()->invitingMeUsers()->updateExistingPivot($request->user_id, [
            'permitted' => true
        ]);
        // 自分からも友達に追加する
        if ($request->user()->allFriends()->where('id', $request->user_id)->exists()) {
            $request->user()->allFriends()->where('id', $request->user_id)->updateExistingPivot($request->user_id, [
                'permitted' => true
            ]);
        } else {
            $request->user()->friends()->attach($request->user_id, ['permitted' => true]);
        }

        // リアルタイム通知
        Pusher::trigger(Controller::ADMIN_CHANNEL, Controller::FRIEND_UPDATE_EVENT, [
            'message' => [
                'user_id' => $request->user()->id,
                'friend_id' => $request->user_id
            ]
        ]);

        return response(['message' => '招待を許可しました'], Response::HTTP_OK);
    }

    /**
     * friends.reject 友達申請を拒否
     * @bodyParam user_id integer required 友達申請してきてる人のユーザーID
     *
     * @responseFile 200 responses/friends.reject.200.json
     * @responseFile 409 responses/friends.reject.409.json
     */
    public function reject(Request $request)
    {
        // 申請されているか
        if (! $request->user()->invitingMeUsers()->where('id', $request->user_id)->exists()) {
            return response()->json(['error' => 'そのユーザーからは招待されていません'], Response::HTTP_CONFLICT);
        }
        $request->user()->invitingMeUsers()->updateExistingPivot($request->user_id, [
            'permitted' => false,
            'deleted_at' => now()
        ]);
        // すでに友達の場合は、destoryするか
        if ($request->user()->allFriends()->where('id', $request->user_id)->exists()) {
            $request->user()->allFriends()->where('id', $request->user_id)->get()->each(function ($u) {
                $u->pivot->deleted_at = now();
                $u->pivot->save();
            });
        }

        // リアルタイム通知
        Pusher::trigger(Controller::ADMIN_CHANNEL, Controller::FRIEND_UPDATE_EVENT, [
            'message' => [
                'user_id' => $request->user()->id,
                'friend_id' => $request->user_id
            ]
        ]);

        return response(['message' => '招待をキャンセルしました'], Response::HTTP_OK);
    }

    /**
     * friends.cancel_invitation 友達申請したけど、やっぱり取り消そう
     *
     * @queryParam friend required フレンドID
     * @responseFile 204 responses/friends.cancel_invitation.204.json
     */
    public function cancelInvitation(Request $request, User $friend)
    {
        $request->user()->waitingFriends()->where('id', $friend->id)->get()->each(function ($f) {
            $f->pivot->deleted_at = now();
            $f->pivot->save();
        });

        // リアルタイム通知
        Pusher::trigger(Controller::ADMIN_CHANNEL, Controller::FRIEND_UPDATE_EVENT, [
            'message' => [
                'user_id' => $request->user()->id,
                'friend_id' => $friend->id
            ]
        ]);

        return response(null, Response::HTTP_NO_CONTENT);
    }
    /**
     * friends.block ブロックする。すでに友達の場合は、削除もする
     *
     * @queryParam friend required フレンドID
     * @responseFile 200 responses/friends.block.200.json
     */
    public function block(Request $request, User $friend)
    {
        if ($request->user()->allRequestMeUsers()->where('id', $friend->id)->exists()) {
            $request->user()->allRequestMeUsers()->where('id', $friend->id)->updateExistingPivot($friend->id, [
                'permitted' => false
            ]);
            // 友達にしてたなら削除する
            $this->friendService->delete($request->user(), $friend);
        } else {
            return response()->json(['error' => 'そのユーザーからは招待されていません'], Response::HTTP_CONFLICT);
        }

        // リアルタイム通知
        Pusher::trigger(Controller::ADMIN_CHANNEL, Controller::FRIEND_UPDATE_EVENT, [
            'message' => [
                'user_id' => $request->user()->id,
                'friend_id' => $friend->id
            ]
        ]);

        return response(['message' => 'ユーザーをブロックしました'], Response::HTTP_OK);
    }
    /**
     * friends.unBlock ブロックしてたけど、かわいそうだから解除してやろう
     *
     * @queryParam friend required フレンドID
     * @responseFile 200 responses/friends.un_block.200.json
     */
    public function unBlock(Request $request, User $friend)
    {
        if ($request->user()->blockingUsers()->where('id', $friend->id)->exists()) {
            $request->user()->blockingUsers()->where('id', $friend->id)->updateExistingPivot($friend->id, [
                'permitted' => true
            ]);
        }
        // ついでに友達追加
        if ($request->user()->allFriends()->where('id', $friend->id)->exists()) {
            $request->user()->allFriends()->where('id', $friend->id)->updateExistingPivot($friend->id, [
                'permitted' => true
            ]);
        } else {
            $request->user()->friends()->attach($friend, ['permitted' => true]);
        }

        // リアルタイム通知
        Pusher::trigger(Controller::ADMIN_CHANNEL, Controller::FRIEND_UPDATE_EVENT, [
            'message' => [
                'user_id' => $request->user()->id,
                'friend_id' => $friend->id
            ]
        ]);

        return response(['message' => 'ユーザーをブロックしました'], Response::HTTP_OK);
    }
}
