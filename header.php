
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<br>
    <header>
        <nav>
            <ul>
                <button><a href="index.php">Home</a></button>
                <button><a href="array.php">Array</a></button>
                <button><a href="calculator.php">Calculator</a></button>
                <button><a href="calender.php">Calender</a></button>
                <button><a href="switch.php">Switch</a></button>
            </ul>
            <div>
                <form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/E-mail...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button>
                </form>
                <a href="signup.php">Sign Up</a>
                <form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">logout</button>
                </form>
            </div>
        </nav>
    </header>
</body>