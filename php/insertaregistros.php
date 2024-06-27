<?php

echo '<title> Insertar en la tabla usuarios </title>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';



$host ="localhost";
$user ="root";
$pass ="";
$db="rolex_table";


$con = mysqli_connect($host, $user, $pass, $db);


if (!$con)
{
    die("La conexion ha fallado: " . mysqli_connect_error());
}

echo "Conexión existosa <br/> <br/>";

$correo = $_POST['correo'];
$name = $_POST['name'];
$contrasena = $_POST['contrasena'];
$numero = $_POST['numero'];



$sql = "INSERT INTO usuarios VALUES ( '$correo', '$name', '$contrasena', '$numero')";

if (mysqli_query($con, $sql))
{
    echo "El registro del pedido se realizo con éxito";
}else{
    echo "Error: " . $sql . "<br/>" . mysqli_error($con);
}
mysqli_close($con);


echo '<br/><br/><a href="../index.php"> Regresar </a>';

?>