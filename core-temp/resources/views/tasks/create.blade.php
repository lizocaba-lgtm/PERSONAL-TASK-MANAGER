<form action="{{ route('tasks.store') }}" method="POST">
    @csrf   ← THIS LINE MUST BE HERE! DON'T REMOVE IT!

    <label>Task Name *</label>
    <input type="text" name="task_name" required>

    <label>Description</label>
    <textarea name="description"></textarea>

    <label>Due Date *</label>
    <input type="date" name="due_date" required>

    <button type="submit">Save Task</button>
</form>