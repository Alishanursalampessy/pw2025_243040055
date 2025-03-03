<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>

    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }

        td {
            width: 50px;
            height: 50px;
            background-color: rgb(232, 92, 82);
            font-size: 20px;
            font-weight: bold;
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    echo "<table>";
    for ($i = 10; $i >= 1; $i--) {
        echo "<tr>";
        for ($j = 1; $j <= $i; $j++) {
            echo "<td>$j</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>