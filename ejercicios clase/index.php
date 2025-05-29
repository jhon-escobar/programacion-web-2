<?php 
$link=new mysqli("localhost","root","","prueba2");
$result = mysqli_query($link, "SELECT * FROM User");

if (!$result) {
    die("Consulta inválida: " . mysqli_error($link));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Listado de Usuarios</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #888;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    
         
        .es_impar {
            background-color:rgb(88, 8, 15);
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Lista de Usuarios</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Carnet</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        while ($fila = mysqli_fetch_assoc($result)) { 
             $clase = ($fila ["ID"] %2 != 0) ? 'es_impar' : '';
            ?>
            
           
        <tr>
            <?
            $clase
            ?>
            <td><?php 
            
            echo $fila['ID']; 
            
            
            ?></td> 
            <td><?php echo $fila['Name']; ?></td>
            <td><?php echo $fila['Last_name']; ?></td>
            <td><?php echo $fila['Phone']; ?></td>
            <td><?php echo $fila['Carnet']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>

<?php
mysqli_close($link);
?>