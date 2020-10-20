<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $array_gender = ['male','female'];
        $rand = array_rand($array_gender);
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'hired_at' => date('Y-m-d'),
            'gender' => $array_gender[$rand],
            'birthdate' =>  date("Y-m-d H:i:s",mt_rand(1262055681,1262055681)),
            'phone_number' => $this->faker->phoneNumber,
            'is_manager' => array_rand([0,1]),
            'informations' => $this->faker->text,
        ];
    }
}
