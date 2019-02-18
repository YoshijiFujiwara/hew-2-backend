<?php

namespace App\Http\Controllers\Admin;


use App\Http\Resources\AttributeResource;
use App\Model\Attribute;
use Illuminate\Http\Response;

class AttributeController
{
    public function index()
    {
        return AttributeResource::collection(Attribute::all());
    }

    public function show(Attribute $attribute)
    {
        return new AttributeResource($attribute);
    }

    public function destroy(Attribute $attribute)
    {
        $attribute->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}