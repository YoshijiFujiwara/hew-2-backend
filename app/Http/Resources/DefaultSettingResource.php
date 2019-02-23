<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DefaultSettingResource extends JsonResource
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
            'manager' => new UserResource($this->manager),
            'name' => $this->name,
            'current_location_flag' => $this->current_location_flag,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'timer' => $this->timer,
            'group' => new GroupResource($this->group),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
