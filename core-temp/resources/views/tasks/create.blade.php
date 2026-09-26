@extends('layouts.app')

@section('content')

<h1>Add New Task</h1>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <p>
        <label><strong>Task Name *</strong></label><br>
        <input type="text" name="task_name" required>
    </p>

    <p>
        <label><strong>Description</strong></label><br>
        <textarea name="description" rows="4"></textarea>
    </p>

    <p>
        <label><strong>Due Date *</strong></label><br>
        <input type="date" name="due_date" required>
    </p>

    <button type="submit">Save Task</button>
    <a href="{{ route('tasks.index') }}">Cancel</a>
</form>

@endsection