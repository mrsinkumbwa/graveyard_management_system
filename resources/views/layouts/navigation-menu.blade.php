<x-jet-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
    {{ __('Register') }}
</x-jet-responsive-nav-link>
<x-jet-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
    {{ __('Login') }}
</x-jet-responsive-nav-link>
