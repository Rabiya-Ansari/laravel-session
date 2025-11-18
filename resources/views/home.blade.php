<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            font-size: 20px;
            font-weight: bold;
            text-decoration: underline;
            padding: 20px;
            background-color: #000000;
            color: white;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .nav-items ul {
            display: flex;
            gap: 30px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-items a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            padding: 4px 8px;
            transition: 0.3s;
        }

        .nav-items a:hover {
            color: gray;
        }

        .logo {
            letter-spacing: 2px;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <div class="nav">
            <div class="logo">Logo</div>

            <div class="nav-items">
                <ul>
                    <li><a href="./">Home</a></li>
                    <li><a href="about.blade.php">About</a></li>
                </ul>
            </div>

            <div class="toggle">toggle</div>
        </div>
    </div>

</body>

</html>
