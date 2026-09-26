@extends('layouts.app')

@section('content')

<h1>Add New Task</h1>

@if ($errors->any())
    <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <div style="margin-bottom: 20px;">
        <label style="font-weight: bold; display: block; margin-bottom: 6px;">Task Name *</label>
        <input type="text" name="task_name" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
    </div>

    <div style="margin-bottom: 20px;">
        <label style="font-weight: bold; display: block; margin-bottom: 6px;">Description</label>
        <textarea name="description" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
    </div>

    <div style="margin-bottom: 20px;">
        <label style="font-weight: bold; display: block; margin-bottom: 6px;">Due Date *</label>
        <input type="date" name="due_date" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
    </div>

    <button type="submit" style="background: #0066ff; color: white; border: none; padding: 10px 20px; border-radius: 4px; font-weight: bold; cursor: pointer;">Save Task</button>
    <a href="{{ route('tasks.index') }}" style="margin-left: 12px; color: #0066ff; text-decoration: none;">Cancel</a>
</form>

</div>

@endsection