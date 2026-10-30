<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $today = today();

        $tasks = [
            ['title' => 'Review daily priorities', 'status' => 'pending', 'task_date' => $today->toDateString()],
            ['title' => 'Update the project documentation', 'status' => 'pending', 'task_date' => $today->toDateString()],
            ['title' => 'Check customer account records', 'status' => 'completed', 'task_date' => $today->toDateString()],
            ['title' => 'Prepare the weekly progress report', 'status' => 'pending', 'task_date' => $today->copy()->addDay()->toDateString()],
            ['title' => 'Review the sales summary', 'status' => 'pending', 'task_date' => $today->copy()->addDay()->toDateString()],
            ['title' => 'Organize project files', 'status' => 'completed', 'task_date' => $today->copy()->subDay()->toDateString()],
            ['title' => 'Check application requirements', 'status' => 'completed', 'task_date' => $today->copy()->subDay()->toDateString()],
            ['title' => 'Plan next week tasks', 'status' => 'pending', 'task_date' => $today->copy()->addDays(2)->toDateString()],
        ];

        foreach ($tasks as $task) {
            Task::updateOrCreate(
                ['title' => $task['title'], 'task_date' => $task['task_date']],
                ['status' => $task['status']]
            );
        }
    }
}
