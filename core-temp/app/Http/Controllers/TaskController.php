<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'task_name' => 'required|max:255',
            'due_date' => 'required|date'
        ]);

        Task::create([
            'task_name' => $request->task_name,
            'description' => $request->description,
            'status' => 'Pending',
            'due_date' => $request->due_date
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task added!');
    }
}