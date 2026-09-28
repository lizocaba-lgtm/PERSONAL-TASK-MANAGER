# PERSONAL TASK MANAGER

**Project Code:** WST21-PM-2026-SF

**Student Name:** Liz Kristel Q.Ocaba

**Course & Year:** BSIT 2-SEC5

**Database Used:** SQLite

---

## Features
- ✅ Add Task
- ✅ View Tasks
- ✅ Edit Task
- ✅ Delete Task
- ✅ Update Status — Pending / Completed

---

## OUTPUT

### 1. Task Board
This is the main page where all tasks are displayed in a table.

<img width="100%" alt="Task Board" src="https://github.com/lizocaba-lgtm/PERSONAL-TASK-MANAGER/blob/main/task_board.png" />

---

### 2. Adding a Task
Click **+ Add New Task** → fill in Task Name, Description, Due Date → click **Save Task**.

<img width="100%" alt="Add Task" src="https://github.com/lizocaba-lgtm/PERSONAL-TASK-MANAGER/blob/main/Adding%20a%20Task.png" />

---

### 3. Display the Task
After saving, the task appears in the list. New tasks show as **Pending** 🟡.

<img width="100%" alt="Display Task" src="https://github.com/lizocaba-lgtm/PERSONAL-TASK-MANAGER/blob/main/Display%20the%20task.png" />

---

### 4. Marked as Pending or Completed
Edit any task → change Status dropdown → Save.
- 🟡 **Pending** = Yellow badge
- 🟢 **Completed** = Green badge

<img width="100%" alt="Update Status" src="https://github.com/lizocaba-lgtm/PERSONAL-TASK-MANAGER/blob/main/Update%20task.png" />

---

### 5. Editing a Task
Click **Edit** → update details → click **Update Task**.

<img width="100%" alt="Edit Task" src="https://github.com/lizocaba-lgtm/PERSONAL-TASK-MANAGER/blob/main/Edit%20Task.png" />

---

### 6. Deleting a Task
Click **Delete** → confirm → task is removed.

<img width="100%" alt="Delete Task" src="https://github.com/lizocaba-lgtm/PERSONAL-TASK-MANAGER/blob/main/Deleting%20a%20TASK.png" />

---

## About This Project
Built with Laravel following the MVC pattern:
- **Model:** `Task` — manages task data
- **Controller:** `TaskController` — handles all logic
- **Routes:** RESTful resource routes
- **Views:** Blade templates with Bootstrap 5
- **Database:** SQLite