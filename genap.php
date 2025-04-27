<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "Bilangan genap dari 1-10 : ";
    for ($i = 1; $i <= 10; $i++) {
     if ($i % 2 == 0) {
        echo $i . " ";
     }
    }
    ?>
</body>
</html>