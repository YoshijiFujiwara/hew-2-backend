<?php

namespace App\Http\Controllers\Admin;

use App\Model\Session;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class SessionUserController extends Controller
{
    public function destroy(Session $session, User $user)
    {
        // セッションの一員でない
        if (! $session->hasTheUser($user)) {
            return response()->json(['error' => 'そのユーザーはそのグループの一員ではありません'], Response::HTTP_NOT_FOUND);
        }

        $session->users()->where('id', $user->id)->get()->each(function (User $user) {
            $user->pivot->deleted_at = now();
            $user->pivot->save();
        });

//        // リアルタイム通知
//        Pusher::trigger(self::ADMIN_CHANNEL, self::SESSION_UPDATE_EVENT, [
//            'message' => [
//                'manager_id' => $session->manager->id,
//                'session_id' => $session->id
//            ]
//        ]);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
