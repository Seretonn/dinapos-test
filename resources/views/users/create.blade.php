<x-layout>
    <form action="{{ route('admin.users.store') }}" method="post">
        @csrf

        <h2>Create a New User</h2>

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
            
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit" class="btn mt-4">Create</button>

        <x-validation-errors />
    </form>
</x-layout>