<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Employees</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fa;
            margin: 0;
            padding: 40px;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        th {
            background: #4A90E2;
            color: white;
            padding: 14px;
            font-size: 16px;
            text-align: left;
        }

        td {
            padding: 12px 14px;
            border-bottom: 1px solid #e1e1e1;
            font-size: 15px;
        }

        tr:hover {
            background: #f0f6ff;
            transition: 0.3s;
        }

        td a {
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 14px;
            color: white;
        }

        td a:nth-child(1) {
            background: #4A90E2;
        }

        td a:nth-child(1):hover {
            background: #357ABD;
        }

        td a:nth-child(2) {
            background: #E94A4A;
            margin-left: 5px;
        }

        td a:nth-child(2):hover {
            background: #c93a3a;
        }

        .more-add {
            display: flex;
            justify-content: flex-end;
            padding-top: 20px;
            padding-right: 150px;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <h1 style="text-align:center; margin-bottom: 20px; color:#333;">All Employees</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Action</th>
        </tr>

        @foreach ($data as $value)
            <tr>
                <td>{{ $value['id'] }}</td>
                <td>{{ $value['emp_name'] }}</td>
                <td>{{ $value['emp_email'] }}</td>
                <td>{{ $value['emp_message'] }}</td>
                <td>
                    <a href="editemployee/{{ $value['id'] }}">Edit</a>
                    <a href="#">Delete</a>
                </td>

            </tr>
        @endforeach

    </table>
    <a href="/addemployee" class="more-add">Add More Employe</a>
</body>

</html>