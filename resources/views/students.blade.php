<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
    @foreach($students as $student)

        <div>{{ $student["name"] }}</div>
        <div>{{ $student["email"] }}</div>

    @endforeach
</body>

</html>