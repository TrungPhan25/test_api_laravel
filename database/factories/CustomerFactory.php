<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition()
    {
        return [
           'name_customer'=>$this->faker->firstName,
            'phone_customer'=>$this->faker->phoneNumber,
            'address_customer'=>$this->faker->address,
            'email_customer'=>$this->faker->email,
            'city_customer'=>$this->faker->city,
        ];
    }
}
