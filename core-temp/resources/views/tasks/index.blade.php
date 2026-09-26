@extends('layouts.app')

@section('content')
    <a href="{{ route('tasks.create') }}" class="btn-add">+ Add New Task</a>
    
    <h1>📋 Personal Task Manager</h1>

    <table>
        <thead>
            <tr>
                <th>Task Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td><strong>{{ $task->task_name }}</strong></td>
                <td>{{ $task->description }}</td>
                <td>
                    <span class="status-pending">{{ $task->status }}</span>
                </td>
                <td>{{ $task->due_date }}</td>
                <td>
                    <a href="{{ route('tasks.edit', $task) }}" class="btn-edit">Edit</a>
                    
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" onclick="return confirm('Delete this task?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection