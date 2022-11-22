<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Articulo;

class ArticuloFactory extends Factory
{
    /**
     * 
     *
     * @return string
     */
    protected $model = Articulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreArticulo'=>$this->faker->name,
            'categoria'=>$this->faker->name(),
            'codigoArticulo'=>$this->faker->numerify('#####'),
            'cantidad'=>$this->faker->numberBetween(10,200),
            'precio'=>$this->faker->numerify()
        ];
    }
}
