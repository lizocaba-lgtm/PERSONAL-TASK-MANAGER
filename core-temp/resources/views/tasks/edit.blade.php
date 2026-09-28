<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container my-5">
    <div class="card shadow-sm p-4" style="max-width: 500px; margin: 0 auto;">
        <h2 class="mb-4">Edit Task</h2>
        
      <form action="{{ route('tasks.update', $task->id) }}" method="POST">
         @csrf
        @method('PUT')
            <div class="mb-3">
                <label class="form-label fw-bold">Task Name *</label>
                <input type="text" name="task_name" value="{{ $task->task_name }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Description</label>
                <textarea name="description" rows="4" class="form-control">{{ $task->description }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Status</label>
                <select name="status" class="form-select">
                    <option value="Pending" {{ $task->status === 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Completed" {{ $task->status === 'Completed' ? 'selected' : '' }}>Completed</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Due Date *</label>
                <input type="date" name="due_date" value="{{ $task->due_date }}" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Update Task</button>
            <a href="{{ url('/tasks') }}" class="btn btn-secondary w-100 mt-2">Cancel</a>
        </form>
    </div>
</div>
</body>
</html>