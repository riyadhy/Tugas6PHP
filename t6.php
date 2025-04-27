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

<?php
    echo "<table>";
    echo "<tr><th>bilangan</th>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";

    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<th>$i</th>"; 
        for ($j = 1; $j <= 10; $j++) {
            $hasil = $i * $j;
         if ($hasil % 2 == 0) {
            echo "<td class='genap'>$hasil</td>";
         } else {
            echo "<td class='ganjil'>$hasil</td>";
         }
        }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>
