<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\UserResource;
use App\Services\FriendService;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class UserFriendController extends Controller
{
    protected $friendService;

    public function __construct(FriendService $friendService)
    {
        $this->friendService = $friendService;
    }

    public function index(User $user)
    {
        return UserResource::collection($user->friends);
    }

    public function destroy(User $user, User $friend)
    {
        $this->friendService->delete($user, $friend);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
