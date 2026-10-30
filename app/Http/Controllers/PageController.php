<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $tasks = Task::today()->orderBy('id')->get();

        return view('pages.home', ['tasks' => $tasks]);
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function profile(): View
    {
        $user = User::query()->whereNotNull('username')->firstOrFail();

        return view('pages.profile', ['user' => $user]);
    }
}
