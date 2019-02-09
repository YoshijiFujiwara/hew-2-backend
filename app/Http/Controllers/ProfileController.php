<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * profiles.update 自分の情報を更新
     * @bodyParam unique_id string required
     * @bodyParam username string required
     * @bodyParam password string required
     *
     *
     * @responseFile 200 responses/profile.update.200.json
     */
    public function update(Request $request)
    {
//        Validator::make($request->all(), [
//            'email' => [
//                'required',
//                'email',
//                Rule::unique('users')->ignore($request->user()->id),
//            ],
//            'unique_id' => [
//                'required',
//                Rule::unique('users')->ignore($request->user()->id),
//            ],
//            'username' => 'required',
//            'password' => 'required'
//        ]);

        $request->validate([
            'email' => 'email|required|unique:users,email,'.$request->user()->id,
            'username' => 'required',
            'unique_id' => 'required|unique:users,unique_id,'.$request->user()->id,
            'password' => 'required'
        ]);

        $user = $request->user();
        $user->email = $request->email;
        $user->username = $request->username;
        $user->unique_id = $request->unique_id;
        $user->password = $request->password;
        $user->save();

        return new UserResource(User::find($user->id));
    }
}
