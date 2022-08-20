<?php

namespace App\Http\Resources\v2;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{

    public function toArray($request)
    {
        return [
          'name_customer'=>$this->name_customer.' '.$this->phone_customer
        ];
    }
}
