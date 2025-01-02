<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'task_name'=>fake()->sentence(),
            'task_description'=>fake()->realText(),
            'image_path'=>fake()->imageUrl(),
            'status'=>fake()->randomElement(['pending','in_progress','completed']),
            'priority'=>fake()->randomElement(['low','medium','high']),
            'due_date'=>fake()->dateTimeBetween('now','+2 months'),
            // 'project_id'=> 1,
            "assigned_user_id"=>1,
            'created_by'=> 1,
            'updated_by'=> 1
        ];
    }
}
