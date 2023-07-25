@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Role</h2>
        <form method="POST" action="{{ route('roles.update', ['role' => $role->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Role Name:</label>
                <input type="text" id="name" name="name" value="{{ $role->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Role</button>
        </form>
        <br>
        <a href="{{ route('roles.index') }}" class="btn btn-secondary">Back to Roles List</a>
    </div>
@endsection
