<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'username' => $this->username,
            'email' => $this->email,
            'permitted' => $this->whenPivotLoaded('user_friends', function () {
                return $this->pivot->permitted;
            }),
            'attribute_id' => $this->whenPivotLoaded('user_friends', function () {
                return $this->pivot->attribute_id;
            }),
            'join_status' => $this->whenPivotLoaded('session_user', function () {
                return $this->pivot->join_status;
            }),
            'paid' => $this->whenPivotLoaded('session_user', function () {
                return $this->pivot->paid;
            }),
            'plus_minus' => $this->whenPivotLoaded('session_user', function () {
                return $this->pivot->plus_minus;
            }),
            'ratio' => $this->whenPivotLoaded('session_user', function () {
                return $this->pivot->ratio;
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
