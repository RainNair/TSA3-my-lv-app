@extends('layouts.app', ['title' => 'Profile | Tasks for Today'])

@section('content')
    <section class="intro">
        <p class="eyebrow">System user</p>
        <h1>Profile</h1>
        <p class="lead">The single user record stored in the database.</p>
    </section>

    <section class="content-panel">
        <h2>{{ $user->full_name }}</h2>
        <p><strong>Username:</strong> {{ $user->username }}</p>
        <p><strong>Email:</strong> <a href="mailto:{{ $user->email }}">{{ $user->email }}</a></p>
    </section>
@endsection
