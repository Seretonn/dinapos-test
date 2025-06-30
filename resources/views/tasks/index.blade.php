<x-layout>
    <h2>Hello, {{ $user->name }}</h2>
    <p>Here are all your tasks</p>

    <ul>
        @foreach ($tasks as $task)
            <li>
                <x-card>
                    <div>
                        <h3>{{ $task->title }}</h3>
                        <p>{{ $task->description }}</p>
                        <p>{{ $task->is_completed }}</p>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>