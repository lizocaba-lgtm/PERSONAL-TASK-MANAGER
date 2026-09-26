<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    // 2. Save submitted task to database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'task_name'   => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date'    => 'required|date',
        ]);

        Task::create([
            'task_name'   => $request->task_name,
            'description' => $request->description,
            'due_date'    => $request->due_date,
            'status'      => 'Pending',
        ]);

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index');
    }
}