<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'column'=>$this->column,
            'position'=>$this->position,
            'title'=>$this->title,
            'content'=>$this->content,
            'color'=>$this->color,
            'badges'=> BadgeResource::collection($this->links)
        ];
    }
}
