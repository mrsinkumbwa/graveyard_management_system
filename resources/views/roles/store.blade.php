@extends('layouts.app')

@section('title', 'Create Role')

@section('content')
    <h2>Create New Role</h2>

    @auth
    <form method="POST" action="{{ route('roles.store') }}">
        @csrf
        <label for="name">Role Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <button type="submit">Create Role</button>
    </form>
    @else
    <p>You need to be logged in to create a new role.</p>
    @endauth

    @guest
    <p>Please <a href="{{ route('login') }}">login</a> or <a href="{{ route('register') }}">register</a> to create a new role.</p>
    @endguest

    <br>
    <a href="{{ route('roles.index') }}">Back to Roles List</a>
@endsection
