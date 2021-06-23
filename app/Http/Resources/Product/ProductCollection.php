<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request); //for returning collection as Product resource
       return [
           'data'=>$this->collection,
           'href'=>[
            'link'=>route('products.show',$this->id)
        ]
       ];
    }
}
