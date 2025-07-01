<x-layout>
    <ul>
        @if ($users->isEmpty())
        <li>
            <div class="card">
                <h3>There are no users created yet</h3>
                <a href="{{ route('admin.users.create') }}" class="btn">Create new</a>
            </div>
        </li>
        @endif
        @foreach ($users as $user)
            @if ($user->isAdmin())
                @continue
            @endif
            <li>
                <div class="card">
                    <div>
                        <h3>Name: {{ $user->name }}</h3>
                        <p>Email: {{ $user->email }}</p>    
                    </div>
                    <div class="btn-container">
                        <a href="{{ route('admin.users.edit', $user) }}" class="edit-btn">Edit</a>
                        <form action="{{ route('admin.users.destroy', $user) }}" method="post" style="display: inline;">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</x-layout>