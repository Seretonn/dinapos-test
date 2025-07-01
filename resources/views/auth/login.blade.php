<x-layout>
    <form action="{{ route('login') }}" method="post">
        @csrf

        <h2>Log In</h2>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit" class="btn mt-4">Log in</button>

        <x-validation-erros />
    </form>
</x-layout>