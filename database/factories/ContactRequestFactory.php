<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ContactRequest;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactRequest>
 */
class ContactRequestFactory extends Factory
{

    protected $model = ContactRequest::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'request_body' => $this->faker->requestBody(),
        ];
    }
}
