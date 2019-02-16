<?php

namespace App\Http\Controllers;

use App\Http\Requests\FriendStoreRequest;
use App\Http\Resources\SessionResource;
use App\Http\Resources\UserResource;
use App\Model\Group;
use App\Model\Session;
use App\User;
use function Composer\Autoload\includeFile;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group friends 友達
 */
class FriendController extends Controller
{
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
     * friends.store 友達申請する
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
        // 自分か
        if ($request->user()->id == $friendRequestUser->id) {
            return response()->json(['error' => '自分です'], Response::HTTP_CONFLICT);
        }
        // すでに友達の場合、２重登録しないようにする
        if ($request->user()->friends()->where('email', $request->email)->exists()) {
            return response()->json(['error' => 'すでにフレンドです'], Response::HTTP_CONFLICT);
        } else if ($request->user()->blockMeUsers()->where('email', $request->email)->exists()) {
            return response()->json(['error' => 'そのユーザーにはブロックされています'], Response::HTTP_CONFLICT);
        } else if ($request->user()->waitingFriends()->where('email', $request->email)->exists()) {
            return response()->json(['error' => 'すでに申請中です'], Response::HTTP_CONFLICT);
        }
        // すでに申請が来ていたり、ブロックされていたりした場合
        if ($request->user()->blockingUsers()->where('email', $request->email)->exists()) {
            return response()->json(['error' => 'そのユーザーからのフレンド申請に対して、ブロックをしています。申請する前に、そのユーザーに対するブロックを解除してください'], Response::HTTP_CONFLICT);
        // すでに申請が来ていた場合は、両方の了承を得たと解釈して良いだろう
        } else if ($request->user()->invitingMeUsers()->where('email', $request->email)->exists()) {
            $request->user()->invitingMeUsers()->where('email', $request->email)->updateExistingPivot($friendRequestUser->id, [
                'permitted' => true
            ]);
            $request->user()->friends()->attach($friendRequestUser, ['permitted' => true]);
        // すでに友達申請が来て、許可していた場合
        } else if ($request->user()->permittingUsers()->where('email', $request->email)->exists()) {
            $request->user()->friends()->attach($friendRequestUser, ['permitted' => true]);
        // 何も申請が来てない
        } else {
            $request->user()->friends()->attach($friendRequestUser, ['permitted' => null]);
        }

        return response(new UserResource($request->user()->waitingFriends->where('id', $newFriend->id)->first()),  Response::HTTP_CREATED);
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
        $manager->managedGroups->each(function (Group $group) use ($friend) {
            $group->users()->where('id', $friend->id)->get()->each(function (User $user) {
                $user->pivot->deleted_at = now();
                $user->pivot->save();
            });
        });
        $manager->managedSessions->each(function (Session $session) use ($friend) {
            $session->users()->where('id', $friend->id)->get()->each(function (User $user) {
                $user->pivot->deleted_at = now();
                $user->pivot->save();
            });
        });
        $request->user()->friends()->where('id', $friend->id)->get()->each(function (User $user) {
            $user->pivot->deleted_at = now();
            $user->pivot->save();
        });

        return response(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * friends.blockedUsers 申請した中でブロックされているユーザー一覧
     *
     * @responseFile 200 responses/friends.blocked_users.200.json
     */
    public function blockedUsers(Request $request)
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

        $request->user()->invitingMeUsers()->updateExistingPivot($request->user()->id, [
            'permitted' => true
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

        $request->user()->invitingMeUsers()->updateExistingPivot($request->user()->id, [
            'permitted' => false
        ]);

        return response(['message' => '招待をキャンセルしました'], Response::HTTP_OK);
    }

    /**
     * friends.friendRequestUsers 申請してきてるユーザー
     *
     * @responseFile 200 responses/friends.friend_request_users.200.json
     */
    public function friendRequestUsers(Request $request)
    {
        return UserResource::collection($request->user()->invitingMeUsers);
    }
}
