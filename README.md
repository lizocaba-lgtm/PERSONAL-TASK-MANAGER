# PERSONAL TASK MANAGER

**Project Code:** WST21-PM-2026-SF

**Student Name:** Liz Kristel Q.Ocaba

**Course & Year:** BSIT2 SEC5

**Database Used:** SQLite

## Features
- Add Task
- View Tasks
- Edit Task
- Delete Task
- Update Status — Pending / Completed

---

## OUTPUT

### 1. Task Board
In this page, this is where you can add tasks and it will display all your tasks in the table.

<img width="100%" alt="Task Board" src="https://github.com/lizocaba-lgtm/PERSONAL-TASK-MANAGER/blob/main/hahha.html" />

---

### 2. Adding a Task
This is how you will add a task — it requires **Task Name**, **Description**, and **Due Date**, then click **Save Task**.

<img width="100%" alt="Add Task" src="https://github.com/lizocaba-lgtm/PERSONAL-TASK-MANAGER/blob/main/Add%20New%20Task.html" />

---

### 3. Display the Task
After adding the task, this is what it looks like when displayed in the Task Board. All new tasks are automatically set to **Pending**.

<img width="100%" alt="Task Displayed" src="https://github.com/lizocaba-lgtm/PERSONAL-TASK-MANAGER/blob/main/DISPLAY%20THE%20TASK.html" />

---

### 4. Marked as Pending or Completed
You can also update the status — choose **Pending** (yellow badge) or **Completed** (green badge) from the dropdown menu when editing.

<img width="100%" alt="Update Status" src="https://github.com/lizocaba-lgtm/PERSONAL-TASK-MANAGER/blob/main/Pending%20or%20Complteted.html" />

---

### 5. Editing a Task
If you want to update a task, click **Edit** — you can change the Task Name, Description, Due Date, and Status. Then click **Update Task** to save the changes.

<img width="100%" alt="Edit Task" src="https://github.com/lizocaba-lgtm/PERSONAL-TASK-MANAGER/blob/main/Edit%20Task.html" />

After saving, the updated task appears in the list:

<img width="100%" alt="Edit Result" src="https://github.com/lizocaba-lgtm/PERSONAL-TASK-MANAGER/blob/main/UPDATED%20TASK.html" />

---

### 6. Deleting a Task
When you click the **Delete** button, a confirmation message appears. Click **OK** to permanently remove the task, or **Cancel** to keep it.

<img width="100%" alt="Delete Confirm" src="https://github.com/lizocaba-lgtm/PERSONAL-TASK-MANAGER/blob/main/delete.html" />

The task is then removed from the list:

<img width="100%" alt="Delete Result" src="https://github.com/lizocaba-lgtm/PERSONAL-TASK-MANAGER/blob/main/deletee.html" />

## About This Project
Built with Laravel following the MVC pattern:
- **Model:** `Task` — manages task data and database structure
- **Controller:** `TaskController` — handles all application logic
- **Routes:** RESTful resource routes
- **Views:** Blade templates with Bootstrap 5 styling
- **Database:** SQLite

## How It Works
1. **Add Task** — Enter details → Save → Appears in list as Pending
2. **View Tasks** — All tasks shown with color-coded status
3. **Edit Task** — Click Edit → Update details → Save
4. **Delete Task** — Click Delete → Confirm → Removed
5. **Update Status** — Edit task → Select Pending/Completed → Save → Badge color changes