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
        // すでに友達の場合、２重登録しないようにする
        if (! empty($request->user()->allFriends->where('email', $request->email)->first())) {
            return response()->json(['error' => 'すでにフレンドか、申請中です'], Response::HTTP_CONFLICT);
        }

        // 自分か
        if ($request->user()->id == User::where('email', $request->email)->first()->id) {
            return response()->json(['error' => '自分です'], Response::HTTP_CONFLICT);
        }

        $newFriend = User::where('email', $request->email)->first();
        $request->user()->friends()->attach($newFriend, ['permitted' => null]);

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
        $request->user()->friends()->detach($friend);

        return response(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * friends.blockedUsers 申請した中でブロックされているユーザー一覧
     *
     * @responseFile 200 responses/friends.blocked_users.200.json
     */
    public function blockedUsers(Request $request)
    {
        return UserResource::collection($request->user()->blockedFriends);
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
        if (! $request->user()->invitingUsers()->where('id', $request->user_id)->exists()) {
            return response()->json(['error' => 'そのユーザーからは招待されていません'], Response::HTTP_CONFLICT);
        }

        $request->user()->invitingUsers()->updateExistingPivot($request->user()->id, [
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
        if (! $request->user()->invitingUsers()->where('id', $request->user_id)->exists()) {
            return response()->json(['error' => 'そのユーザーからは招待されていません'], Response::HTTP_CONFLICT);
        }

        $request->user()->invitingUsers()->updateExistingPivot($request->user()->id, [
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
        return UserResource::collection($request->user()->invitingUsers);
    }
}
