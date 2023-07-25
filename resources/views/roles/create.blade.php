@extends('layouts.app')

@section('content')
    <h1>Create New Role</h1>
    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <label for="name">Role Name:</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Create Role</button>
    </form>
    <a href="{{ route('roles.index') }}">Back to Roles List</a>
@endsection
