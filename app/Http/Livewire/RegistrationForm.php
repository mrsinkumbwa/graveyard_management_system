<?php

    // app/Http/Livewire/RegistrationForm.php

    namespace App\Http\Livewire;

    use Livewire\Component;
    use App\Models\Role;
    use App\Models\User;
    use Illuminate\Validation\Rule;
    
    class RegistrationForm extends Component
    {
        public $firstName;
        public $lastName;
        public $email;
        public $password;
        public $phoneNumber;
        public $roleId; // Default role ID for Regular User

        public function render()
        {
            $roles = Role::all();

            return view('livewire.registration-form', compact('roles'));
        }

        public function register()
        {
            $this->validate([
                'firstName' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'email' => [
                    'required', 'email', 'max:255',
                    Rule::unique('users', 'email'), // Check for unique email
                ],
                'phoneNumber' => [
                    'required', 'string', 'max:20',
                    Rule::unique('users', 'phone_number'), // Check for unique phone number
                ],
                'password' => 'required|min:8',
                'roleId' => 'required|exists:roles,id',
            ]);
    
            // Create the new user in the database
            $user = User::create([
                'first_name' => $this->firstName,
                'last_name' => $this->lastName,
                'email' => $this->email,
                'password' => bcrypt($this->password),
                'phone_number' => $this->phoneNumber,
                'role_id' => $this->roleId,
            ]);
        
            // Display a success message to the user
            session()->flash('success', 'Account registered successfully!');
        
            // Redirect the user to the login form
            return redirect()->route('login');
        }
        
    }
