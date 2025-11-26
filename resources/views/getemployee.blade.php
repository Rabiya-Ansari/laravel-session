<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Employees</title>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
        @foreach ($data as $value)


            <tr>
                <td>{{ $value['id'] }}</td>
                <td>{{ $value['emp_name'] }}</td>
                <td>{{ $value['emp_email'] }}</td>
                <td>{{ $value['emp_message'] }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>