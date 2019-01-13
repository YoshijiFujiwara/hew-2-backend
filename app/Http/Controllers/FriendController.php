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
     * 友達一覧
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        return UserResource::collection($request->user()->friends);
    }

    /**
     * 友達に追加
     * @param FriendStoreRequest $request
     * @return UserResource|\Illuminate\Http\JsonResponse
     */
    public function store(FriendStoreRequest $request)
    {
        // すでに友達の場合、２重登録しないようにする
        if (! empty($request->user()->friends->where('email', $request->email)->first())) {
            return response()->json(['error' => 'すでにフレンドです'], Response::HTTP_CONFLICT);
        }

        $newFriend = User::where('email', $request->email)->first();
        $request->user()->friends()->attach($newFriend);

        return new UserResource($newFriend);
    }

    /**
     * 特定の友達の詳細情報
     * @param Request $request
     * @param User $friend
     * @return UserResource
     */
    public function show(Request $request, User $friend)
    {
        return new UserResource($friend);
    }

    /**
     * 友達から削除
     * @param Request $request
     * @param User $friend
     * @return \Illuminate\Contracts\Routing\ResponseFactory|Response
     */
    public function destroy(Request $request, User $friend)
    {
        $request->user()->friends()->detach($friend);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
