<?php

namespace Database\Factories;

use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @param $factory
     * @return array
     */
    protected $model = Students::class;

    public function definition(): array
    {
            return [
                'name' => $this->faker->name,
                'email' =>$this-> faker->email,
                'address'=>$this->faker->address,
                'id' =>$this->create()->id,
            ];
    }


}
