<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'logo' => $this->logo,
            'logoPath' => asset('images/' . $this->logo),
            'link' => $this->link, 
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
        ];
    }
}
 