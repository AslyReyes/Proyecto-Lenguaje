<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;

class ClienteFactory extends Factory
{
    /**
     * 
     *
     * @return string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->firstName(),
            'apellido'=>$this->faker->lastName(),
            'direccion'=>$this->faker->text(60),
            'ciudad'=>$this->faker->city(),
            'codigoPostal'=>$this->faker->numerify(),
            'telefono'=>$this->faker->numerify('8###-')
                       .$this->faker->numerify('####')
        ];
    }
}
