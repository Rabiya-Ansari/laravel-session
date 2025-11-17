<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    @vite('resources/css/app.css')

</head>

<body>

    <div class="navbar flex text-3xl font-bold underline p-10 bg-blue-900">
        <div class="nav flex justify-between items-center w-full">
            <div class="logo">Logo</div>
            <div class="nav-items">
                <ul class="flex gap-6">
                    <li><a href="./" class="hover:text-blue-400">Home</a></li>
                    <li><a href="about.blade.php" class="hover:text-blue-400">About</a></li>
                </ul>
            </div>
            <div class="toggle">
                toggle
            </div>
        </div>
    </div>

</body>


</html>