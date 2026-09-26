@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>📋 Personal Task Manager</h2>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ Add New Task</a>
    </div>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-light">
            <tr>
                <th>Task Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Due Date</th>
                <th width="200px">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tasks as $task)
                <tr>
                    <td><strong>{{ $task->task_name }}</strong></td>
                    <td>{{ $task->description ?? 'No description' }}</td>
                    <td>
                        <span class="badge {{ $task->status === 'Completed' ? 'bg-success' : 'bg-warning text-dark' }}">
                            {{ $task->status }}
                        </span>
                    </td>
                    <td>{{ $task->due_date }}</td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>

                        <!-- Delete Button (MUST BE A FORM WITH @method('DELETE')) -->
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this task?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-4">No tasks found. Click "+ Add New Task" to create one!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection