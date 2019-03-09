<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\ShopResource;
use App\Model\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function index()
    {
        return ShopResource::collection(Shop::all());
    }

    public function show(Shop $shop)
    {
        return new ShopResource($shop);
    }
}
