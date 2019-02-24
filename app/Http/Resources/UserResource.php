<?php

namespace App\Http\Resources;

use App\Model\Attribute;
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
            'unique_id' => $this->unique_id,
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'unique_id_search_flag' => $this->unique_id_search_flag,
            'username_search_flag' => $this->username_search_flag,
            'permitted' => $this->whenPivotLoaded('user_friends', function () {
                return $this->pivot->permitted;
            }),
            'attribute' => $this->whenPivotLoaded('user_friends', function () {
                return new AttributeResource(Attribute::find($this->pivot->attribute_id));
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
            'attribute_name' => $this->whenPivotLoaded('session_user', function () {
                return $this->pivot->attribute_name;
            }),
            'budget' => $this->whenPivotLoaded('session_user', function () {
                return $this->pivot->budget;
            }),
            'budget_actual' => $this->whenPivotLoaded('session_user', function () {
                return $this->pivot->budget_actual;
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
