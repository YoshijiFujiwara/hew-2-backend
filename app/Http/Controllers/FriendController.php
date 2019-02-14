<?php

namespace App\Http\Controllers;

use App\Http\Requests\FriendStoreRequest;
use App\Http\Resources\SessionResource;
use App\Http\Resources\UserResource;
use App\User;
use function Composer\Autoload\includeFile;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FriendController extends Controller
{
    /**
     * friends.index 友達一覧
     *
     * @responseFile 200 responses/friends.index.200.json
     * @responseFile 204 responses/friends.index.204.json
     */
    public function index(Request $request)
    {
        if ($request->user()->friends()->count() === 0) {
            return response()->json(null, Response::HTTP_NO_CONTENT);
        } else {
            return UserResource::collection($request->user()->friends);
        }
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
        $friendRequestUser = User::where('email', $request->email)->firstOrFail();

        // 自分か
        if ($request->user()->id == $friendRequestUser->id) {
            return response()->json(['error' => '自分です'], Response::HTTP_CONFLICT);
        }

        // すでに友達の場合、２重登録しないようにする
        if ($request->user()->friends()->where('email', $request->email)->exists()) {
            return response()->json(['error' => 'すでにフレンドです'], Response::HTTP_CONFLICT);
        } else if ($request->user()->blockingFriends()->where('email', $request->email)->exists()) {
            return response()->json(['error' => 'ブロック中です'], Response::HTTP_CONFLICT);
        } else if ($request->user()->waitingFriends()->where('email', $request->email)->exists()) {
            return response()->json(['error' => '申請中です'], Response::HTTP_CONFLICT);
        }

        // すでに申請が来ていたり、ブロックされていたりした場合
        if ($request->user()->blockingMeUsers()->where('email', $request->email)->exists()) {
            return response()->json(['error' => 'ブロックされています'], Response::HTTP_CONFLICT);
        } else if ($request->user()->invitingMeUsers()->where('email', $request->email)->exists()) {
            $request->user()->invitingMeUsers()->where('email', $request->email)->first()->updateExistingPivot($friendRequestUser->id, [
                'permitted' => true
            ]);
            $request->user()->friends()->attach($friendRequestUser, ['permitted' => true]);

        } else if ($request->user()->friendedMeUsers()->where('email', $request->email)->exists()) {
            $request->user()->friends()->attach($friendRequestUser, ['permitted' => true]);
        } else {
            $request->user()->friends()->attach($friendRequestUser, ['permitted' => null]);
        }

        return response(new UserResource($request->user()->waitingFriends->where('id', $friendRequestUser->id)->first()),  Response::HTTP_CREATED);
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
//        $request->user()->friends()->detach($friend);

        $request->user()->friends()->where('id', $friend->id)->get()->each(function ($u) {
            $u->pivot->deleted_at = now();
            $u->pivot->save();
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
        return UserResource::collection($request->user()->blockingMeUsers);
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
