<?php
$conexion = mysqli_connect("localhost", "root", "", "rolex_table") or die(mysqli_connect_error());

$consulta2 = mysqli_query($conexion, "SELECT * FROM ventas");

if (mysqli_num_rows($consulta2) > 0) {
    echo '<table border="1" align="center">';
    echo '<tr><th colspan="5"><h3>Actualiza compra</h3></th></tr>';
    echo '<tr>
            <td>Correo del cliente</td>
            <td>Cantidad de Rolex 1</td>
            <td>Cantidad de Rolex 2</td>
            <td>Cantidad de Rolex 3</td>
            <td>Cantidad de Rolex 4</td>
            <td>Cantidad de Rolex 5</td>
            <td>Cantidad de Rolex 6</td>
            <td>Cantidad de Rolex 7</td>
            <td>Cantidad de Rolex 8</td>
            <td>Cantidad de Rolex 9</td>
            <td>Cantidad de Rolex 10</td>
          </tr>';

    // Iterar sobre los registros obtenidos
    while ($registro = mysqli_fetch_array($consulta2)) {
        echo '<tr>';
        echo '<td style="background-color:#556EE6">' . $registro["correo"] . '</td>';
        echo '<td style="background-color:#556EE6">' . $registro["rolex"] . '</td>';
        echo '<td style="background-color:#556EE6">' . $registro["rolex2"] . '</td>';
        echo '<td style="background-color:#556EE6">' . $registro["rolex3"] . '</td>';
        echo '<td style="background-color:#556EE6">' . $registro["rolex4"] . '</td>';
        echo '<td style="background-color:#556EE6">' . $registro["rolex5"] . '</td>';
        echo '<td style="background-color:#556EE6">' . $registro["rolex6"] . '</td>';
        echo '<td style="background-color:#556EE6">' . $registro["rolex7"] . '</td>';
        echo '<td style="background-color:#556EE6">' . $registro["rolex8"] . '</td>';
        echo '<td style="background-color:#556EE6">' . $registro["rolex9"] . '</td>';
        echo '<td style="background-color:#556EE6">' . $registro["rolex10"] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo "No se encontraron registros en la base de datos.";
}

mysqli_close($conexion);

echo '<br><br><br>';
echo '<button><a href="../index.php"> Regresar en la pagina </a></button>';
?>
