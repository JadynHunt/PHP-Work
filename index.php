
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include 'header.php';
?>
<main>
    <p>You are logged out!</p>
    <p>You are logged in!</p>
</main>
<form method="GET">
    <input type="text" name="person" placeholder="Enter your name here!">
    <button>SUBMIT</button>
</form>


<?php
    $name = $_GET['person'];
    echo "<h1>$name"." barks at dogs at the dog park to assert his dominance.</h1> ";
    echo "<h1>$name"." feels more powerful when he does this.</h1>";

?>

<!-- Post -->
<?php
echo $_POST['name']
?>
<form method="POST">
    <input type="hidden" name="name" value="Jadyn">
    <button type="submit">PRESS ME!</button>
</form>
<!-- End of Post -->
<!-- Cookies -->
<?php

setcookie("name", "Jadyn", time() + 172800000);

?>
<!-- End of Cookies -->
</body>