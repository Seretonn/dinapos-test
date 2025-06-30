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
            <h1>Task Manager</h1>
            <a href="{{ route('tasks.create') }}">Create new task</a> 
            <a href="{{ route('show.login') }}">Login</a> 
            <a href="{{ route('show.register') }}">Register</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>