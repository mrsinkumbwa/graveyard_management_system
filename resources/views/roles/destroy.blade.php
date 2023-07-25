@extends('layouts.app')

@section('title', 'Delete Role')

@section('content')
    <h2>Delete Role</h2>

    @auth
    <form method="POST" action="{{ route('roles.destroy', $role->id) }}" onsubmit="return confirm('Are you sure you want to delete this role?');">
        @csrf
        @method('DELETE')
        <p>Are you sure you want to delete the role '{{ $role->name }}'?</p>
        <button type="submit">Delete Role</button>
    </form>
    @else
    <p>You need to be logged in to delete a role.</p>
    @endauth

    @guest
    <p>Please <a href="{{ route('login') }}">login</a> or <a href="{{ route('register') }}">register</a> to delete a role.</p>
    @endguest

    <br>
    <a href="{{ route('roles.index') }}">Back to Roles List</a>
@endsection
