<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-4">Welcome to the Graveyard Management System</h1>

        <p class="text-lg mb-8">
            Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application.
            Laravel is designed to help you build your application using a development environment that is simple,
            powerful, and enjoyable. We believe you should love expressing your creativity through programming,
            so we have spent time carefully crafting the Laravel ecosystem to be a breath of fresh air. We hope you love it.
        </p>

        <!-- Registration Form -->
        <livewire:registration-form />

        <!-- Login Form -->
        <livewire:login-form />
    </div>
@endsection
