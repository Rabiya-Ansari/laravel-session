<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>
    <form action="/addemployee" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name here.." required>
        <input type="email" name="email" placeholder="Email here.." required>
        <textarea name="message" id="" placeholder="Message here.."></textarea>

        <input type="submit">
    </form>
</body>
</html>