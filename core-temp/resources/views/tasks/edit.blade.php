@extends('layouts.app')

@section('content')
    <h1>Edit Task</h1>
    <div class="form-container">
        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Task Name *</label>
            <input type="text" name="task_name" value="{{ $task->task_name }}" required>

            <label>Description</label>
            <textarea name="description" rows="4">{{ $task->description }}</textarea>

            <label>Status</label>
            <select name="status">
                <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
            </select>

            <label>Due Date *</label>
            <input type="date" name="due_date" value="{{ $task->due_date }}" required>

            <button type="submit" class="btn-save">Update Task</button>
            <a href="{{ route('tasks.index') }}" class="btn-cancel">Cancel</a>
        </form>
    </div>
@endsection