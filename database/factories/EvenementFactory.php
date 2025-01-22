<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evenement>
 */
class EvenementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title'=> $this->faker->name(),
            'description'=> $this->faker->text(),
            'location'=> $this->faker->text(),
            'start_date'=> $this->faker->date(),
            'end_date'=> $this->faker->date(),
            'image_path'=> $this->faker->text(),
            'status'=> "upcoming",
            'organizer'=> $this->faker->text(),
            'organizer_phone'=> $this->faker->text(),
            'organizer_email'=> $this->faker->text(),
            'artist_id'=> \App\Models\Artist::factory(),
            'author_id'=> \App\Models\User::factory(),
            
        ];
    }
}
