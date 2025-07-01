<x-layout>
    <form action="{{ route('admin.users.update', $user) }}" method="post">
        @csrf
        @method("patch")
        
        <h2>Editing User</h2>
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" required>

        <label for="password">New Password:</label>
        <input type="password" name="password" required>

        <label for="password_confirmation">Confirm New Password:</label>
        <input type="password" name="password_confirmation" required>

        <div class="btn-container">
            <button type="submit" class="edit-btn mt-4">Update</button>
            <a href="{{ route('tasks.index') }}" class="cancel-btn mt-4">Cancel</a>    
        </div>
    </form>

    <x-validation-errors />
</x-layout>