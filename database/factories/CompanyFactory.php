<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'logo' => $this->faker->imageUrl(640,480,null,false),
            'siret' => $this->faker->regexify('[0-9]{14}'),
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'postal_code' => $this->faker->postcode,
            'country' => $this->faker->country,
            'business_hour_from' => '08:00:00',
            'business_hour_to' => '19:00:00',
            'email' => $this->faker->companyEmail,
            'website' => 'www.'.$this->faker->domainName,
            'head_office' => 1
        ];
    }

    public function notHeadOffice()
    {
        return $this->state(function (array $attributes) {
            return [
                'head_office' => 0,
            ];
        });
    }
}
