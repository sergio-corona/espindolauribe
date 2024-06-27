<?php

echo '<title> Usuario </title>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';

//Conectando con la BD
$host ="localhost";
$user ="root";
$pass ="";
$db="venta_reloj"; 


$con = mysqli_connect($host, $user, $pass, $db);


if (!$con)
{
    die("La conexion ha fallado: " . mysqli_connect_error());
}

echo "Conexión existosa <br/> <br/>";

$usuario = $_POST['name'];
$email = $_POST['correo'];
$pwd = $_POST['contrasena'];
$num = $_POST['numero'];


$sql = 'INSERT INTO rolex VALUES ( '.$usuario.', '.$email.', '.$pwd.', '.$num.')';

if (mysqli_query($con, $sql))
{
    echo "El registro del pedido se realizo con éxito";
}else{
    echo "Error al insertar  " . $sql . "<br/>" . mysqli_error($con);
}
mysqli_close($con);


echo '<br/><br/><a href="../index.php"> Regresar </a>';

?>