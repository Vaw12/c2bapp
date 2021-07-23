<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'id' => (string)$this->id,
            'type' => 'Books',
            'attribute' => [
                'name' => $this->name,
                'description' =>$this->descritiption,
                'publication_year' => (string)$this->publication_year,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
                ]
        ];
    }
}
