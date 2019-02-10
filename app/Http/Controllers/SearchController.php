<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SearchController extends Controller
{
    /**
     * search.forward_by_username ユーザーネームで検索し、複数を返す(前方一致)
     *
     * @bodyParam username string required
     *
     * @responseFile 200 responses/search.forward_by_username.200.json
     */
    public function forwardSearchByUsername(Request $request)
    {
        $request->validate([
            'username' => 'required',
        ]);

        $users = User::where('username', 'like', $request->username . '%')->where('username_search_flag', true)->get();

        if (isset($users)) {
            return UserResource::collection($users);
        } else {
            return response(null, Response::HTTP_NO_CONTENT);
        }
    }

    /**
     * search.perfect_by_unique_id ユニークidで検索し、あれば一件返す(完全一致)
     *
     * @bodyParam unique_id string required
     *
     * @responseFile 200 responses/search.perfect_by_unique_id.200.json
     */
    public function perfectSearchByUniqueId(Request $request)
    {
        $request->validate([
            'unique_id' => 'required',
        ]);

        $user = User::where('unique_id', $request->unique_id)->where('unique_id_search_flag', true)->first();

        if (isset($user)) {
            return new UserResource($user);
        } else {
            return response(null, Response::HTTP_NO_CONTENT);
        }
    }

    /**
     * search.forward_by_unique_id ユニークidで検索し、あれば一件返す(前方一致)
     *
     * @bodyParam unique_id string required
     *
     * @responseFile 200 responses/search.forward_by_unique_id.200.json
     */
    public function forwardSearchByUniqueId(Request $request)
    {
        $request->validate([
            'unique_id' => 'required',
        ]);

        $users = User::where('unique_id', 'like', $request->unique_id . '%')->where('unique_id_search_flag', true)->get();

        if (isset($users)) {
            return UserResource::collection($users);
        } else {
            return response(null, Response::HTTP_NO_CONTENT);
        }
    }
}
