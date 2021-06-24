<?php

namespace App\Http\Resources\Category;

use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'name'=>$this->name,
            'detail'=>$this->detail,
            'products'=>ProductResource::collection($this->products)
        ];
    }
}
