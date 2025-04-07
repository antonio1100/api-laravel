<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Domicilio;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Domicilio>
 */
class DomicilioFactory extends Factory
{
    protected $model = Domicilio::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       
            return [
                'user_id' => User::inRandomOrder()->value('id') ?: factory(User::class),
                'domicilio' => fake()->streetName,
                'numero_ext' => fake()->buildingNumber,
                'colonia' => fake()->streetName,
                'codigo_postal' => fake()->postcode,
                'ciudad' => fake()->city
            ];
      
    }
}
