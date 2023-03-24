<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'message' => $this->faker->sentence(),
            'sent_by' => $this->faker->firstName,
            'validtill' =>now(),
            'user_id' => 1,
        ];
    }
}
