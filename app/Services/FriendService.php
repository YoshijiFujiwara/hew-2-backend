<?php
namespace App\Services;


use App\Model\Group;
use App\Model\Session;
use App\User;
use Illuminate\Http\Response;

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
    }

    public function delete(User $user, User $friend)
    {
        $user->managedGroups->each(function (Group $group) use ($friend) {
            $group->users()->where('id', $friend->id)->get()->each(function (User $user) {
                $user->pivot->deleted_at = now();
                $user->pivot->save();
            });
        });
        $user->managedSessions->each(function (Session $session) use ($friend) {
            $session->users()->where('id', $friend->id)->get()->each(function (User $user) {
                $user->pivot->deleted_at = now();
                $user->pivot->save();
            });
        });
        $user->user()->friends()->where('id', $friend->id)->get()->each(function (User $user) {
            $user->pivot->deleted_at = now();
            $user->pivot->save();
        });
    }
}