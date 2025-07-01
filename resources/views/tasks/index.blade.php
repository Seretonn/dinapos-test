<x-layout>
    <ul>
        @if ($tasks->isEmpty())
        <li>
            <div class="card">
                <h3>There are no tasks created yet</h3>
                <a href="{{ route('tasks.create') }}" class="btn">Create new</a>
            </div>
        </li>
        @endif
        @foreach ($tasks as $task)
            <li>
                <div class="card">
                    <div>
                        <h3>{{ $task->title }}</h3>
                        @if ($task->is_completed)
                            <p><span class="bg-green-50 text-green-500 font-bold">Done</span></p>
                        @else
                            <p><span class="bg-red-50 text-red-500 font-bold">Pending</span></p>
                        @endif
                        <p>{{ $task->description }}</p>    
                    </div>
                    <div class="btn-container">
                        <a href="{{ route('tasks.edit', $task) }}" class="edit-btn">Edit</a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="post" style="display: inline;">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</x-layout>