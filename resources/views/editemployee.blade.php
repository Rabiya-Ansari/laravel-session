<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .edit {
            background: white;
            padding: 30px;
            width: 380px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            animation: fadeIn 0.4s ease;
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 24px;
            color: #333;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            transition: 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #4A90E2;
            box-shadow: 0 0 6px rgba(74, 144, 226, 0.4);
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: #4A90E2;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #357ABD;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body>
    <div class="edit">
        <h1>Edit Employee</h1>

        <form action="/editingemployee/{{ $data['id'] }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name here" value="{{ $data['emp_name'] }}">
            <input type="email" name="email" placeholder="Email here" value="{{ $data['emp_email'] }}">
            <input type="text" name="message" placeholder="Message here" value="{{ $data['emp_message'] }}">

            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
