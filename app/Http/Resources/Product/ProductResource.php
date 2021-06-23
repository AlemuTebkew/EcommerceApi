<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'category'=>$this->category,
            'detail'=>$this->detail,
            'price'=>$this->price,
            'status'=>$this->status,
            'rating'=>$this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),2): 'No rating',
            'href'=>[
                'link'=>route('products.show',$this->id)
            ]
        ];
    }
}
