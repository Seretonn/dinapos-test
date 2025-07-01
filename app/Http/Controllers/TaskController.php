<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $tasks = $user->tasks;

        return view("tasks.index", compact("user", "tasks"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tasks.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|string|max:100",
            "description" => "required|string|min:10",
            "is_completed" => "required|boolean",
        ]);

        Auth::user()->tasks()->create($validated);

        return redirect()->route("tasks.index")->with("success", "Task created successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view("tasks.edit", compact("task"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            "title" => "required|string|max:100",
            "description" => "required|string|min:10",
            "is_completed" => "required|boolean",
        ]);

        $task->update($validated);

        return redirect()->route("tasks.index")->with("success", "Task updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route("tasks.index")->with("success", "Tasks deleted successfully");
    }
}
