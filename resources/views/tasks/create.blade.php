<x-layout>
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        
        <h2>Create a New Task</h2>
        
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="10" required>{{ old('description') }}</textarea>

        <label for="is_completed">Status:</label>
        <select id="is_completed" name="is_completed" required>
            <option value="" disabled selected>Select a Status</option>
            <option value=0>Pending</option>
            <option value=1>Done</option>
        </select>

        <div class="btn-container">
            <button type="submit" class="edit-btn mt-4">Create</button>
            <a href="{{ route('tasks.index') }}" class="cancel-btn mt-4">Cancel</a>    
        </div>

        <x-validation-errors />
    </form>
</x-layout>