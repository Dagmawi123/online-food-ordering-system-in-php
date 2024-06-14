<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "Cat_id"=>'1',
            "title"=>$this->faker->name(),
            "email"=>$this->faker->email(),
            "phone"=>$this->faker->phoneNumber(),
            "website"=>$this->faker->url(),
            "address"=>$this->faker->address(),
            "date"=>Date::now(),
            "o_hr"=>"",
            'c_hr'=>'',
            'o_days'=>'',
            'image'=>'',
         
        ];
    }
}
