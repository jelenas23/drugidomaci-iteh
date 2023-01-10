<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IzvestajResource extends JsonResource
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
            'id' => $this->resource->id,
            'pacijent' => $this->resource->pacijent,
            'datum' => $this->resource->datum,
            'komenatar' => $this->resource->komentar,
            'laborant' => new LaborantResource($this->resource->laborant)
        ];

    }
}
