<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index(): View
    {
        $tasks = Task::query()
            ->orderBy('task_date')
            ->orderBy('id')
            ->get();

        return view('pages.tasks', ['tasks' => $tasks]);
    }
}
