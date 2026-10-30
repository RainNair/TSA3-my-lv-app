@extends('layouts.app', ['title' => 'Welcome | Tasks for Today'])

@section('content')
    <section class="intro">
        <p class="eyebrow">Daily task dashboard</p>
        <h1>Welcome</h1>
        <p class="lead">Tasks scheduled for {{ today()->format('F j, Y') }}.</p>
    </section>

    <div class="table-wrap">
        <table>
            <thead><tr><th>Task</th><th>Status</th><th>Date</th></tr></thead>
            <tbody>
                @forelse ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td><span class="badge">{{ ucfirst($task->status) }}</span></td>
                        <td>{{ $task->task_date->format('M j, Y') }}</td>
                    </tr>
                @empty
                    <tr><td colspan="3">No tasks scheduled for today.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
