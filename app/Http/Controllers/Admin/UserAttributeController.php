<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\AttributeResource;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAttributeController extends Controller
{
    public function index(User $user)
    {
        return AttributeResource::collection($user->managedAttributes);
    }
}
