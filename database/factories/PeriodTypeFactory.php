<?php

namespace Database\Factories;

use App\Models\PeriodType;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeriodTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PeriodType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $array_name = ['holidays','additional_days_off','sick'];
        $rand = array_rand($array_name);
        return [
            'name' => $array_name[$rand],
            'description' => $this->faker->text,
            'color' => $this->faker->hexColor,
        ];
    }
}
