<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            border: 2xp solid black

        }
        th, td {
            border: 1px solid black;
            padding: 8px ;
            text-align: center;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th></th>
    </tr>
<?php

for ($i = 0; $i < 30; $i++) {
    echo "<tr><td>" . $suma = rand(1, 500); "</tr></td>";
    
}

?>
</table>


</body>
</html>