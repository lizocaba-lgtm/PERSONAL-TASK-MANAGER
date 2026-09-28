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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'task_name'   => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date'    => 'required|date',
        ]);

        $validated['status'] = 'Pending';

        Task::create($validated);

        return redirect('/tasks');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

 public function update(Request $request, $id)
{
    $task = Task::findOrFail($id);
    
    $task->task_name = $request->task_name;
    $task->description = $request->description;
    $task->status = $request->status;
    $task->due_date = $request->due_date;
    
    $task->save();  

    return redirect('/tasks');
}

   public function destroy($id)
{
    $task = Task::findOrFail($id);
    $task->delete();
    
    return redirect('/tasks')->with('success', 'Task deleted!');
}
}