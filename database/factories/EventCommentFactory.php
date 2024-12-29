<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventComment>
 */
class EventCommentFactory extends Factory
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
            'evenement_id' => \App\Models\Evenement::factory(),
            'user_id' => \App\Models\User::factory(),
            'content' => $this->faker->text(),
            'status' => "approved",
        ];
    }
}
