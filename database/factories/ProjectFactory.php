<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Enums\ProjectStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id'   => User::factory(),
            'name'      => $this->faker->word(),
            'reference' => $this->faker->word(),
            'currency'  => $this->faker->randomElement(['USD', 'BRL']),
            'status'    => $this->faker->randomElement(ProjectStatus::values()),
        ];
    }
}
