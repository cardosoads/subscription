<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'project_id'    => Project::factory(),
            'customer_id'   => Customer::factory(),
            'product_id'    => Product::factory(),
            'status'        => 1,
            'trial_ends_at' => $this->faker->optional()->dateTime(),
            'grace_ends_at' => $this->faker->optional()->dateTime(),
            'starts_at'     => $this->faker->dateTime(),
            'ends_at'       => $this->faker->dateTime(),
        ];
    }
}
