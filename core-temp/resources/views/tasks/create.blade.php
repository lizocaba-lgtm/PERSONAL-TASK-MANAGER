@extends('layouts.app')

@section('content')
<h1>Add New Task</h1>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <div style="margin: 15px 0;">
        <label><strong>Task Name *</strong></label><br>
        <input type="text" name="task_name" required style="width: 300px; padding: 8px;">
    </div>

    <div style="margin: 15px 0;">
        <label><strong>Description</strong></label><br>
        <textarea name="description" rows="4" style="width: 300px; padding: 8px;"></textarea>
    </div>

    <div style="margin: 15px 0;">
        <label><strong>Due Date *</strong></label><br>
        <input type="date" name="due_date" required style="padding: 8px;">
    </div>

    <button type="submit" style="background: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer;">Save Task</button>
    <a href="{{ route('tasks.index') }}" style="margin-left: 15px;">Cancel</a>
</form>
@endsection