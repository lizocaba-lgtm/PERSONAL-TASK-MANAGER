<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Personal Task Manager</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
        body { background: #f5f5f5; padding: 2rem; max-width: 1000px; margin: 0 auto; }
        
        .btn-add {
    background: #007bff;
    color: white;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 4px;
    display: inline-block;
    margin-bottom: 20px;
    border: none;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    background: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

th {
    background: #f8f9fa;
    padding: 12px 15px;
    text-align: left;
    font-weight: bold;
    color: #555;
}

td {
    padding: 15px;
    border-top: 1px solid #eee;
}

.status-pending {
    background: #ffc107;
    color: #000;
    padding: 6px 14px;
    border-radius: 4px;
    font-weight: bold;
    display: inline-block;
}

.status-completed {
    background: #28a745;
    color: white;
    padding: 6px 14px;
    border-radius: 4px;
    font-weight: bold;
    display: inline-block;
}

.btn-edit {
    background: #ffc107;
    color: #000;
    padding: 6px 12px;
    border-radius: 4px;
    text-decoration: none;
    margin-right: 5px;
    display: inline-block;
}

.btn-delete {
    background: #dc3545;
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 4px;
    cursor: pointer;
}

.btn-save {
    background: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.btn-cancel {
    color: #666;
    text-decoration: none;
    margin-left: 10px;
    padding: 10px;
}

.form-container {
    max-width: 500px;
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

label {
    display: block;
    margin: 15px 0 5px;
    font-weight: bold;
}

input, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}
    </style>
</head>
<body>
    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif
    @yield('content')
</body>
</html>