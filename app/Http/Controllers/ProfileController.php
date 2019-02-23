<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Pusher\Laravel\Facades\Pusher;

/**
 * @group profile プロフィール
 */
class ProfileController extends Controller
{
    /**
     * profiles.update 自分の情報を更新
     * @bodyParam unique_id string required
     * @bodyParam username string required
     * @bodyParam password string required
     * @bodyParam unique_id_search_flag boolean required
     * @bodyParam username_search_flag boolean required
     *
     * @responseFile 200 responses/profile.update.200.json
     */
    public function update(Request $request)
    {
        $request->validate([
            'email' => 'email|required|unique:users,email,'.$request->user()->id,
            'username' => 'required',
            'unique_id' => 'required|unique:users,unique_id,'.$request->user()->id,
            'password' => 'required',
            'unique_id_search_flag' => 'required|boolean',
            'username_search_flag' => 'required|boolean',
        ]);

        $user = $request->user();
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->unique_id_search_flag = $request->unique_id_search_flag;
        $user->username_search_flag = $request->username_search_flag;
        $user->save();

        // orm のbootを無視したいから、仕方ない
        DB::table('users')->where('id', $request->user()->id)->update(['unique_id' => $request->unique_id]);

        $response = new UserResource(User::find($user->id));
        // リアルタイム通知
        Pusher::trigger(self::ADMIN_CHANNEL, self::USER_UPDATE_EVENT, [
            'message' => $response
        ]);

        return $response;
    }
}
