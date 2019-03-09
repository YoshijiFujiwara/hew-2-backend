<?php
namespace App\Services;


use App\Http\Controllers\Controller;
use App\Http\Resources\GroupResource;
use App\Http\Resources\SessionResource;
use App\Http\Resources\UserResource;
use App\Model\Group;
use App\Model\Session;
use App\User;
use Illuminate\Http\Response;
use Pusher\Laravel\Facades\Pusher;

class FriendService
{
    public function store(User $user, User $friendRequestUser, string $email)
    {
        // 自分か
        if ($user->id == $friendRequestUser->id) {
            return response()->json(['error' => '自分です'], Response::HTTP_CONFLICT);
        }
        // すでに友達の場合、２重登録しないようにする
        if ($user->friends()->where('email', $email)->exists()) {
            return response()->json(['error' => 'すでにフレンドです'], Response::HTTP_CONFLICT);
        } else if ($user->blockMeUsers()->where('email', $email)->exists()) {
            return response()->json(['error' => 'そのユーザーにはブロックされています'], Response::HTTP_CONFLICT);
        } else if ($user->waitingFriends()->where('email', $email)->exists()) {
            return response()->json(['error' => 'すでに申請中です'], Response::HTTP_CONFLICT);
        }
        // すでに申請が来ていたり、ブロックされていたりした場合
        if ($user->blockingUsers()->where('email', $email)->exists()) {
            return response()->json(['error' => 'そのユーザーからのフレンド申請に対して、ブロックをしています。申請する前に、そのユーザーに対するブロックを解除してください'], Response::HTTP_CONFLICT);
            // すでに申請が来ていた場合は、両方の了承を得たと解釈して良いだろう
        } else if ($user->invitingMeUsers()->where('email', $email)->exists()) {
            $user->invitingMeUsers()->where('email', $email)->updateExistingPivot($friendRequestUser->id, [
                'permitted' => true
            ]);
            $user->friends()->attach($friendRequestUser, ['permitted' => true]);
            // すでに友達申請が来て、許可していた場合
        } else if ($user->permittingUsers()->where('email', $email)->exists()) {
            $user->friends()->attach($friendRequestUser, ['permitted' => true]);
            // 何も申請が来てない
        } else {
            $user->friends()->attach($friendRequestUser, ['permitted' => null]);
        }

        // リアルタイム通知
        Pusher::trigger(Controller::ADMIN_CHANNEL, Controller::FRIEND_CREATE_EVENT, [
            'message' => [
                'user_id' => $user->id,
                'friend_id' => $friendRequestUser->id
            ]
        ]);

        return response(new UserResource($user->waitingFriends()->where('id', $friendRequestUser->id)->first()),  Response::HTTP_CREATED);
    }

    public function delete(User $user, User $friend)
    {
        // 解除した側の処理
        $user->managedGroups->each(function (Group $group) use ($friend) {
            $group->users()->where('id', $friend->id)->get()->each(function (User $user) {
                $user->pivot->deleted_at = now();
                $user->pivot->save();
            });
            // リアルタイム通知
            Pusher::trigger(Controller::ADMIN_CHANNEL, Controller::GROUP_UPDATE_EVENT, [
                'message' => [
                    'manager_id' => $group->manager->id,
                    'group_id' => $group->id
                ]
            ]);
        });
        $user->managedSessions->each(function (Session $session) use ($friend) {
            $session->users()->where('id', $friend->id)->get()->each(function (User $user) {
                $user->pivot->deleted_at = now();
                $user->pivot->save();
            });
            // リアルタイム通知
            Pusher::trigger(Controller::ADMIN_CHANNEL, Controller::SESSION_UPDATE_EVENT, [
                'message' => [
                    'manager_id' => $session->manager->id,
                    'session_id' => $session->id
                ]
            ]);
        });
        $user->allFriends()->where('id', $friend->id)->get()->each(function (User $user) {
            $user->pivot->deleted_at = now();
            $user->pivot->save();
        });

        // 解除された側の処理
        $friend->managedGroups->each(function (Group $group) use ($user) {
            $group->users()->where('id', $user->id)->get()->each(function (User $user) {
                $user->pivot->deleted_at = now();
                $user->pivot->save();
            });
            // リアルタイム通知
            Pusher::trigger(Controller::ADMIN_CHANNEL, Controller::GROUP_UPDATE_EVENT, [
                'message' => [
                    'manager_id' => $group->manager->id,
                    'group_id' => $group->id
                ]
            ]);
        });
        $friend->managedSessions->each(function (Session $session) use ($user) {
            $session->users()->where('id', $user->id)->get()->each(function (User $user) {
                $user->pivot->deleted_at = now();
                $user->pivot->save();
            });
            // リアルタイム通知
            Pusher::trigger(Controller::ADMIN_CHANNEL, Controller::SESSION_UPDATE_EVENT, [
                'message' => [
                    'manager_id' => $session->manager->id,
                    'session_id' => $session->id
                ]
            ]);
        });
        /*
        $friend->allRequestMeUsers()->where('id', $friend->id)->get()->each(function (User $user) {
            $user->pivot->deleted_at = now();
            $user->pivot->save();
        });
        */
        $friend->allFriends()->where('id', $user->id)->get()->each(function (User $user) {
            $user->pivot->deleted_at = now();
            $user->pivot->save();
        });

        // リアルタイム通知
        Pusher::trigger(Controller::ADMIN_CHANNEL, Controller::FRIEND_DELETE_EVENT, [
            'message' => [
                'user_id' => $user->id,
                'friend_id' => $friend->id
            ]
        ]);
    }
}