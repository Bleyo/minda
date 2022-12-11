<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


class MilestoneFactory extends Factory
{
    protected $model = Milestone::class;

    public function definition()
    {
        $environment = $this->faker->randomElement(['P', 'Q', 'I', 'L']);
        $zone = $this->faker->randomDigitNotZero();
        $group = Str::upper($this->faker->citySuffix());
        $job = $this->faker->countryCode();

        return [

            'environment' => $environment,
            'zone' => $zone,
            'group' => $group,
            'job' => $job,
            'message' => $this->faker->paragraph(3),
            'user_id' => User::factory(),
            'status' => rand(0, 1),
            'name' => $group,
        ];
    }
}
