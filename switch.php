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

<h2>Pick a number 1-4 to predict your future!</h2>
<form method="GET">
    <input type="number" name="number" placeholder="Enter a number 1-4.">
    <button>SUBMIT</button>
</form>
    
    <?php
    $number = $_GET['number'];
    switch ($number) {
        case 1:
            echo "<h1>You will find $5 soon!</h1>";
        break;
        case 2:
            echo "<h1>Taco Bell will give you diarrhea!</h1>";
        break;
        case 3:
            echo "<h1>You will be rich!</h1>";
        break;
        case 4:
            echo "<h1>You will explode soon!</h1>";
        break;
        default:
        echo "<h1>This number is not is not in the 1-4 range. The numbers for this are either 1, 2, 3, or 4. Try again! </h1>";

    }

    ?>
</body>
