<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Task</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5" style="max-width: 600px;">
    <div class="card shadow-sm p-4">
        <h3 class="mb-4">Add New Task</h3>

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

       <form action="/tasks" method="POST">
    @csrf

    <div class="mb-3">
        <label>Task Name *</label>
        <input type="text" name="task_name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Due Date *</label>
        <input type="date" name="due_date" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Save Task</button>
    <a href="/tasks" class="btn btn-link">Cancel</a>
   </form>
       
    </div>
</div>

</body>
</html>