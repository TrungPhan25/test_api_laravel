<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{

    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'name_customer'=>$this->name_customer,
            'phone_customer'=>$this->phone_customer
        ];

    }
}
