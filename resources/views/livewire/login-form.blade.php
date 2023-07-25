<!-- resources/views/livewire/login-form.blade.php -->

<div>
    <form wire:submit.prevent="login">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" wire:model.lazy="email" required>
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" wire:model.lazy="password" required>
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Login</button>
    </form>
</div>
