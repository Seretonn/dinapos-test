<x-layout>
    <h2>Here are all your tasks</h2>

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