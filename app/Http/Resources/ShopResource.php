<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'shop_id' => $this->shop_id,
            'name' => $this->name,
            'lng' => $this->lng,
            'lat' => $this->lat,
            'genre_id' => $this->genre_id,
            'genre_name' => $this->genre_name,
            'address' => $this->address,
            'large_area_name' => $this->large_area_name,
            'middle_area_name' => $this->middle_area_name,
            'small_area_name' => $this->small_area_name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
