<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\SessionResource;
use App\Model\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopSessionController extends Controller
{
    public function index(Shop $shop)
    {
        return SessionResource::collection($shop->sessions);
    }
}
