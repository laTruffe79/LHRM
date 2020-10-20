<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class ServiceFactory
 * You must provide the belongsTo relationship with Company like this
 *   Service::factory()->count(1)->state([ 'company_id' => '1'])->create();
 * @package Database\Factories
 *
 */
class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' =>$this->faker->firstName, //firstname as service name...
            'informations' => $this->faker->text()
        ];
    }


}
