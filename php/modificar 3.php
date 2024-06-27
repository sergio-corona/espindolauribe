<?php
echo '<link rel="stylesheet" type="text/css" href="../css/estiloticket.css"/>';
echo '<link rel="icon" href="../logo.ico">';

//Conectando con la BD
$host ="localhost";
$user ="root";
$pass ="";
$db="rolex_table";  //Nombre de la BD

$conexion = mysqli_connect($host, $user, $pass, $db) or die ("Error en la conexion");

 //Define variables
 $correo=$_POST['correo'] ?? 0;
 $rolex=$_POST["blackrolex"] ?? 0;
 $rolex2=$_POST["blackrolex2"] ?? 0;
 $rolex3=$_POST["blackrolex3"] ?? 0;
 $rolex4=$_POST["blackrolex4"] ?? 0;
 $rolex5=$_POST["blackrolex5"] ?? 0;
 $rolex6=$_POST["blackrolex6"] ?? 0;
 $rolex7=$_POST["blackrolex7"] ?? 0;
 $rolex8=$_POST["blackrolex8"] ?? 0;
 $rolex9=$_POST["blackrolex9"] ?? 0;
 $rolex10=$_POST["blackrolex10"] ?? 0;

mysqli_query ($conexion, "UPDATE ventas set rolex='$rolex', rolex2='$rolex2', rolex3='$rolex3',rolex4='$rolex4',rolex5='$rolex5',rolex6='$rolex6',rolex7='$rolex7',rolex8='$rolex8',rolex9='$rolex9',rolex10='$rolex10'
          WHERE correo='$correo'")
         or die ("Error al eliminar los datos");
mysqli_close($conexion);
echo "Actualización exitosa. <br>";
echo "Si desea hacer otra actualización, regrese al formulario de actualizaciones.<br>";
?>


<?php
//CONEXION A BD
$conexion = mysqli_connect("localhost","root","","rolex_table") or die (mysqli_error());

$consulta2=mysqli_query($conexion, "SELECT * FROM ventas");
if (mysqli_num_rows($consulta2)>0) {

		echo "<table border=1 align=center>";
		 echo "<tr><th colspan= 5> <h3> Actualiza compra </h3></th></tr>";
				    echo "<td> Correo del cliente </td> 
                            <td>Cantidad de PC compradas</td> 
						    <td> Cantidad de discos comprados</td> 
						    <td> Cantidad de bocinas Alexa compradas</td>";

		while ($registro = mysqli_fetch_array($consulta2)){  //mysqli_fetch_array-- Obtiene una fila de resultados como un array asociativo, numérico, o ambos

			if ($registro["correo" ] >=0) {

				 echo "<tr>";
                    echo "<td style=background-color:#556EE6 >".$registro["correo"]."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro["pc"]."</td>";
					echo "<td style=background-color:#556EE6 >".$registro["dd"]."</td>";
					echo "<td style=background-color:#556EE6>".$registro["bocina"]."</td>";
                   
              
                   
			}
		}
	}

    echo '<br><button><a href="venta.php"> Regresar </a></button>';
?>

