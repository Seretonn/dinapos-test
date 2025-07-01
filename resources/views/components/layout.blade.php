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
    <x-error-msg />

    <header>
        <nav>
            <h1><a href="{{ route("home") }}">Task Manager</a></h1>

            @auth
                @if (Auth::user()->isAdmin())
                    <a href="{{ route('admin.users.index') }}">Users List</a>
                    <a href="{{ route('admin.users.create') }}">Create new</a> |
                @else
                    <a href="{{ route('tasks.index') }}">Tasks List</a>
                    <a href="{{ route('tasks.create') }}">Create new</a> |
                @endif
            @endauth

            @guest
                <a href="{{ route('show.login') }}" class="btn">Login</a> 
                <a href="{{ route('show.register') }}" class="btn">Register</a>
            @endguest

            @auth
                <h4>Hello, <strong>{{ Auth::user()->name }}</strong></h4>
                <form action="{{ route("logout") }}" method="post" class="m-0">
                    @csrf
                    <button type="submit" class="btn">Logout</button>
                </form>
            @endauth
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>