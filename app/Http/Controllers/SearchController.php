<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * search.byusername ユーザーネームで検索し、複数を返す
     *
     * @bodyParam username string required
     *
     * @responseFile 200 responses/search.by_username.200.json
     */
    public function searchByUsername(Request $request)
    {
        $request->validate([
            'username' => 'required',
        ]);

        $users = User::where('username', 'like', '%' . $request->username . '%')->get();

        return UserResource::collection($users);
    }

    /**
     * search.byUniqueId ユニークidで検索し、あれば一件返す
     *
     * @bodyParam unique_id string required
     *
     * @responseFile 200 responses/search.by_unique_id.200.json
     */
    public function searchByUniqueId(Request $request)
    {
        $request->validate([
            'unique_id' => 'required',
        ]);

        $user = User::where('unique_id', $request->unique_id)->first();

        return new UserResource($user);
    }
}
