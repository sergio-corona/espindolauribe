<?php 
echo"<title> sesion </title>";
echo'<link rel="icon" href="../imagenes/logo.ico">';
echo'<link rel="stylesheet" href="../css/secion2.css" type="text/css"  media="screen"/>';
echo'<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
$correo=$_POST["correo"];
$contrasena=$_POST["contrasena"];
$name=$_POST['name'];
$numero=$_POST["numero"];
$apellidos=$_POST["apellido"];
echo "<div name'contenedor'>";
echo "<h2>Tus datos ingresados son: </h2>";
echo "<br>";
echo "Nombre: " . $name . $apellidos . " ";
echo "<br>";
echo "Correo: " . $correo . " ";
echo "<br>";
echo "Tu numero: " . $numero . " ";
echo "<br>";
echo "</div>";
?>