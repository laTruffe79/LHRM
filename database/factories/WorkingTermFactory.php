<?php

namespace Database\Factories;

use App\Models\WorkingTerm;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * Class WorkingTermFactory
 * Assume that users, employments and service exists
 * @package Database\Factories
 */
class WorkingTermFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WorkingTerm::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => DB::table('users')->inRandomOrder()->first()->id,
            'employment_id' => DB::table('employments')->inRandomOrder()->first()->id,
            'service_id' => DB::table('services')->inRandomOrder()->first()->id,
            'days_off_per_year' => rand(10,50),
            'additional_days_off' => rand(1,10),
            'working_time_per_week' => rand(25,45),
            'annual_salary' => rand(25000,150000),
            'current_total_bonus' => rand(25000,150000),
            'currency_code' => $this->faker->currencyCode,
            'informations' => $this->faker->text,
        ];
    }
}
