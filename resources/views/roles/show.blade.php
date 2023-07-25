@extends('layouts.app')

@section('title', 'View Role')

@section('content')
    <h2>View Role</h2>

    <p><strong>Name:</strong> {{ $role->name }}</p>

    @auth
    <div>
        <a href="{{ route('roles.edit', $role->id) }}">Edit Role</a>
        <form method="POST" action="{{ route('roles.destroy', $role->id) }}" onsubmit="return confirm('Are you sure you want to delete this role?');">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Role</button>
        </form>
    </div>
    @else
    <p>You need to be logged in to manage roles.</p>
    @endauth

    @guest
    <p>Please <a href="{{ route('login') }}">login</a> or <a href="{{ route('register') }}">register</a> to manage roles.</p>
    @endguest

    <br>
    <a href="{{ route('roles.index') }}">Back to Roles List</a>
@endsection
