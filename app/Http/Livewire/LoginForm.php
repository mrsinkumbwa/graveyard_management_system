<?php

// app/Http/Livewire/LoginForm.php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginForm extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login-form');
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $user = Auth::user();

            if ($user->isAdmin()) {
                // Redirect to Admin dashboard
                return redirect()->route('admin.dashboard');
            } elseif ($user->isServiceProvider()) {
                // Redirect to Service Provider dashboard
                return redirect()->route('service-provider.dashboard');
            } elseif ($user->isSupplier()) {
                // Redirect to Supplier dashboard
                return redirect()->route('supplier.dashboard');
            } else {
                // Redirect to Regular User dashboard (or any default dashboard)
                return redirect()->route('regular-user.dashboard');
            }
        } else {
            // Authentication failed
            session()->flash('error', 'Invalid credentials. Please try again.');
        }
    }
}


