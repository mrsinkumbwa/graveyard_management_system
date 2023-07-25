<!-- resources/views/livewire/registration-form.blade.php -->

<div>
    <form wire:submit.prevent="register">
        <div>
            <label for="first_name">First Name</label>
            <input type="text" wire:model="firstName" id="first_name" required>
            @error('firstName') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="last_name">Last Name</label>
            <input type="text" wire:model="lastName" id="last_name" required>
            @error('lastName') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="phone_number">Phone Number</label>
            <input type="text" wire:model="phoneNumber" id="phone_number" required>
            @error('phoneNumber') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" wire:model="email" id="email" required>
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" wire:model="password" id="password" required>
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="role_id">Account Type</label>
            <select wire:model="roleId" id="role_id" required>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
            @error('roleId') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Register</button>
    </form>
    @if (session('success'))
        <div>
            Registration successful! You can now <a href="{{ route('login') }}">login</a>.
        </div>
    @endif
    @if ($errors->any())
        <div>
            Error: Please check your registration details and try again.
        </div>
    @endif

</div>
