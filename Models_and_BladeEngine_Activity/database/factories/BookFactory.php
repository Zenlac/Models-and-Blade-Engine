<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;

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

     protected $model = Book::class;
    public function definition(): array
    {
        return [
            'id' => fake()->unique()->randomNumber(),
            'isbn' => fake()->unique()->isbn13(),
            'title' => fake()->text(50),
            'author' => fake()->name(),
            'description' => fake()->text(100),
            'date_published'=> fake()->date(),
        ];
    }
}
