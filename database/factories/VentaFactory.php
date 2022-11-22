<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Venta;

class VentaFactory extends Factory
{
    /**
     * 
     *
     * @return string
     */
    protected $model = Venta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numVenta'=>$this->faker->numerify(),
            'fechaVenta'=>$this->faker->date(),
            'horaVenta'=>$this->faker->time(),
            'impuesto'=>$this->faker->numberBetween(4,2),
            'total'=>$this->faker->numerify()
        ];
    }
}
