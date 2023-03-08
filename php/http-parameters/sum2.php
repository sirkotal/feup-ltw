<?php
$num1 = (int)$_GET['num1'];
$num2 = (int)$_GET['num2'];
$result = $num1 + $num2;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sum</title>
    </head>
    <body>
        <p><?= $num1 ?> + <?= $num2 ?> = <?= $result ?></p>
        <p><a href="form2.html">Do another sum.</a></p>
    </body>
</html>