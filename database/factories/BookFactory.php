<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::pluck('id')->all();

        return [
            'user_id'   =>  $this->faker->randomElement($users),
            'title' =>  $this->faker->realText(),
            'isbn'  => $this->faker->isbn13(),
            'description'   =>  $this->faker->sentences(4),
        ];
    }
}
