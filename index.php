<?php
$host = 'myservidor.mysql.database.azure.com';
$username = 'pauln@myservidor';
$password = 'Paul.123';
$db_name = 'pruebadb';

//Initializes MySQLi

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo 5</title>
</head>
<body>
    <table border="1">
       <tr>
           <td>id</td>
           <td>name</td>
           <td>quantity</td>
       </tr>
       <?php if(isset($producto)){
        foreach ($producto as $key) {?>
           <tr>
           <td><?php echo $key['id']; ?></td>
           <td><?php echo $key['name']; ?></td>
           <td><?php echo $key['quantity']; ?></td>
           </tr>
       <?php } print_r($producto); } ?>
    </table>
</body>
</html>
