<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class MemoResource extends JsonResource
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
            'attributes' => $this->resource->attributes(),
            'relationships' => [
                'user' => new UserResource($this->user),
            ],
            'links' => [
                'self' => route('memoApi', ['memo' => $this->id]),
            ],
        ];
    }
}
