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
            'timer' => $this->timer,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
