<?php

namespace Database\Factories;

use App\Models\Module\Task\Task;
use App\Models\Module\Task\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{

    protected $model = Todo::class;
    public function definition()
    {
        return [
            'task_id' => Task::factory(),
            'description' => $this->faker->sentence()
        ];
    }
}
