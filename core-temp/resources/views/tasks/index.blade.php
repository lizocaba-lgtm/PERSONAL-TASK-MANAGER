<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container my-5">
    <div class="card shadow-sm p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="m-0">📋 Personal Task Manager</h2>
            <a href="/tasks/create" class="btn btn-primary">+ Add New Task</a>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Task Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Due Date</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tasks as $task)
                        <tr>
                            <td><strong>{{ $task->task_name }}</strong></td>
                            <td>{{ $task->description ?? '-' }}</td>
                            <td>
                                <span class="badge {{ $task->status === 'Completed' ? 'bg-success' : 'bg-warning text-dark' }}">
                                    {{ $task->status }}
                                </span>
                            </td>
                            <td>{{ $task->due_date }}</td>
                            <td class="text-center">
                                <a href="/tasks/{{ $task->id }}/edit" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                                
                                {{-- ✅ DELETE FORM — FULLY WORKING --}}
                                <form action="/tasks/{{ $task->id }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this task?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">
                                No tasks found. <a href="/tasks/create" class="btn btn-sm btn-primary">Add your first task</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>