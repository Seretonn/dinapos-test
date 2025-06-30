<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-success-msg />

    <header>
        <nav>
            <h1><a href="{{ route("home") }}">Task Manager</a></h1>
            <a href="{{ route('tasks.create') }}">Create new task</a> |
            <a href="{{ route('show.login') }}" class="btn">Login</a> 
            <a href="{{ route('show.register') }}" class="btn">Register</a>
            <form action="{{ route("logout") }}" method="post" class="m-0">
                @csrf
                <button type="submit" class="btn">Logout</button>
            </form>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>