<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Team;
use App\Models\Subscriber;
use App\Models\Content;

class TeamFactory extends Factory
{
    protected $model = Team::class;

    public function definition()
    {
        return [
            'user_id' => Subscriber::factory(rand(2, 5)),
            'milestone_id' => Content::factory(rand(1, 5)),
            'group' => true
        ];
    }
}
