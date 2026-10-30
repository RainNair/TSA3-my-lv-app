@extends('layouts.app', ['title' => 'About | Tasks for Today'])

@section('content')
    <section class="intro"><p class="eyebrow">About the system</p><h1>About Tasks for Today</h1><p class="lead">Tasks for Today is a Laravel task-management application.</p></section>
    <section class="content-panel">
        <p>This application displays today's tasks on the Welcome page and all saved tasks on the Task List page.</p>
        <p>The Profile page displays the system user, while the task records are stored in the database and retrieved through Laravel Eloquent.</p>
        <p>Developed by Rainier Louis Espino.</p>
    </section>
@endsection
