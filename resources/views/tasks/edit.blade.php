<x-layout>
    <form action="{{ route('tasks.update', $task) }}" method="post">
        @csrf
        @method("patch")
        
        <h2>Editing Task</h2>
        
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $task->title) }}" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="10" required>{{ old('description', $task->description) }}</textarea>

        <label for="is_completed">Status:</label>
        <select id="is_completed" name="is_completed" required>
            <option value="{{ $task->is_completed ? "1" : "0" }}" selected>{{ $task->is_completed ? "Done" : "Pending"}}</option>
            <option value="{{ $task->is_completed ? "0" : "1" }}">{{ $task->is_completed ? "Pending" : "Done"}}</option>
        </select>

        <div class="btn-container">
            <button type="submit" class="edit-btn mt-4">Update</button>
            <a href="{{ route('tasks.index') }}" class="cancel-btn mt-4">Cancel</a>    
        </div>
    </form>

    <x-validation-errors />
</x-layout>