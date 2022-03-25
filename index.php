<?php
session_start();
$host = 'myservidor.mysql.database.azure.com';
$username = 'pauln@myservidor';
$password = 'Paul.123';
$db_name = 'pruebadb';

//Initializes MySQLi
$conn = mysqli_init();

//mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, 'myservidor.mysql.database.azure.com', 'pauln@myservidor', 'Paul.123', 'pruebadb', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


printf("Reading data from table: \n");
$res = mysqli_query($conn, 'SELECT * FROM inventory');
while ($row = mysqli_fetch_assoc($res))
 {
    var_dump($row);
 }
$_SESSION['producto'][]=$row;
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
       <?php if(isset($_SESSION['producto'])){
        foreach ($_SESSION['producto'] as $key => $value) {?>
           <tr>
           <td><?php echo $value['id']; ?></td>
           <td><?php echo $value['name']; ?></td>
           <td><?php echo $value['quantity']; ?></td>
           </tr>
       <?php } } ?>
    </table>
</body>
</html>
