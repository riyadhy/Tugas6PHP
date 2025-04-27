<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas_6</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        th {
            background-color: limegreen;
            color: white;
        }
        .ganjil {
            background-color: yellow;
        }
        .genap {
            background-color: cyan;
        }
    </style>
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
