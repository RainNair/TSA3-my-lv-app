@extends('layouts.app', ['title' => 'Task List | Tasks for Today'])

@section('content')
    <section class="intro">
        <p class="eyebrow">All saved tasks</p>
        <h1>Task List</h1>
        <p class="lead">Every task ordered by scheduled date.</p>
    </section>

    <div class="table-wrap">
        <table>
            <thead><tr><th>Task</th><th>Status</th><th>Task Date</th></tr></thead>
            <tbody>
                @forelse ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td><span class="badge">{{ ucfirst($task->status) }}</span></td>
                        <td>{{ $task->task_date->format('M j, Y') }}</td>
                    </tr>
                @empty
                    <tr><td colspan="3">No tasks found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
