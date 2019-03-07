<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GuestSessionResource extends JsonResource
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
            'name' => $this->name,
            'shop_id' => $this->shop_id,
            'budget' => $this->budget,
            'actual' => $this->actual,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'my_budget_estimate' => isset($this->my_budget_estimate)? $this->my_budget_estimate: 0,
            'my_budget_actual' => isset($this->my_budget_actual)? $this->my_budget_actual: 0,
            'unit_rounding_budget' => $this->unit_rounding_budget,
            'unit_rounding_actual' => $this->unit_rounding_actual,
            'manager' => new UserResource($this->manager),
            'users' => UserResource::collection($this->users),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
