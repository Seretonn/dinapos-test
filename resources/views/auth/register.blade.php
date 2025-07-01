<x-layout>
    <form action="{{ route('register') }}" method="post">
        @csrf

        <h2>Register</h2>

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
            
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit" class="btn mt-4">Register</button>

        <x-validation-erros />
    </form>
</x-layout>