<?php
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<link rel="stylesheet" href="../css/actividad.css">';
echo'<link rel="icon" href="../imagenes/logo.ico">';
echo '<title>Tiket</title>';

$rolex=$_POST["blackrolex"] ?? 0;
$rolex2=$_POST["goldex"] ?? 0;
$rolex3=$_POST["producto3"] ?? 0;
$rolex4=$_POST["producto4"] ?? 0;
$rolex5=$_POST["producto5"] ?? 0;
$rolex6=$_POST["producto6"] ?? 0;
$rolex7=$_POST["producto7"] ?? 0;
$rolex8=$_POST["producto8"] ?? 0;
$rolex9=$_POST["producto9"] ?? 0;
$rolex10=$_POST["producto10"] ?? 0;

echo "<h2>Tiket De Compra</h2>";
echo '<main  style="color: #fff; text-align: center; margin: 1cm 17cm;width: 200px; height: 500px;">';
echo "<h3>Rolex</h3><br><br>";
echo "Producto: Reloj de rolex <br><br>";

$descuento=0;

if($rolex > 0){
    echo "Producto: Black rolex <br>";
    echo "Cantidad de productos: " . $rolex . "<br><br>";
    echo "Precio x articulo: $1,257<br>";
    $precio_articulo=1257;
    $descuento=$precio_articulo * $rolex;
    if($descuento > 3000){
        echo "<br>¡¡FELIZIDADEZ!!<br>";
        echo "Usted obtubo un descuento del '10%'<br>";
        echo "Devido a que su compra supero los $3000 en su compra<br>";
        $descuento=$descuento * 0.90;
        echo "por lo tanto su total a pagar es de: <br> <h2>" . $descuento . "</h2>";
    }
    else{
        echo "Lo lamentamos pero no pudo obtener algun descuento<br>";
        echo "Devido a que su compra no supero los $3000<br><br>";
        echo "Su total a pagar es de: <br> <h2>" . $descuento . "</h2><br><br>";
    }
}
elseif($rolex2 > 0){
    echo "Producto: Goldex <br>";
    echo "Cantidad de productos: " . $rolex2 . "<br><br>";
    echo "Precio x articulo: $2,250<br>";
    $precio_articulo=2250;
    $descuento=$precio_articulo * $rolex2;
    if($descuento > 3000){
        echo "<br>¡¡FELIZIDADEZ!!<br>";
        echo "Usted obtubo un descuento del '10%'<br>";
        echo "Devido a que su compra supero los $3000 en su compra<br>";
        $descuento=$descuento * 0.90;
        echo "por lo tanto su total a pagar es de: <br> <h2>" . $descuento . "</h2>";
    }
    else{
        echo "Lo lamentamos pero no pudo obtener algun descuento<br>";
        echo "Devido a que su compra no supero los $3000<br><br>";
        echo "Su total a pagar es de: <br> <h2>" . $descuento . "</h2><br><br>";
    }

}
elseif($rolex3 > 0){
    echo "Producto: Lip-rolex <br>";
    echo "Cantidad de productos: " . $rolex3 . "<br><br>";
    echo "Precio x articulo: $1,746<br>";
    $precio_articulo=1746;
    $descuento=$precio_articulo * $rolex3;
    if($descuento > 3000){
        echo "<br>¡¡FELIZIDADEZ!!<br>";
        echo "Usted obtubo un descuento del '10%'<br>";
        echo "Devido a que su compra supero los $3000 en su compra<br>";
        $descuento=$descuento * 0.90;
        echo "por lo tanto su total a pagar es de: <br> <h2>" . $descuento . "</h2>";
    }
    else{
        echo "Lo lamentamos pero no pudo obtener algun descuento<br>";
        echo "Devido a que su compra no supero los $3000<br><br>";
        echo "Su total a pagar es de: <br> <h2>" . $descuento . "</h2><br><br>";
    }
}
elseif($rolex4 > 0){
    echo "Producto: Cristals-rlx <br>";
    echo "Cantidad de productos: " . $rolex4 . "<br><br>";
    echo "Precio x articulo: $574<br>";
    $precio_articulo=574;
    $descuento=$precio_articulo * $rolex4;
    if($descuento > 3000){
        echo "<br>¡¡FELIZIDADEZ!!<br>";
        echo "Usted obtubo un descuento del '10%'<br>";
        echo "Devido a que su compra supero los $3000 en su compra<br>";
        $descuento=$descuento * 0.90;
        echo "por lo tanto su total a pagar es de: <br> <h2>" . $descuento . "</h2>";
    }
    else{
        echo "Lo lamentamos pero no pudo obtener algun descuento<br>";
        echo "Devido a que su compra no supero los $3000<br><br>";
        echo "Su total a pagar es de: <br> <h2>" . $descuento . "</h2><br><br>";
    }
}
elseif($rolex5 > 0){
    echo "Producto: Elegant-rlx <br>";
    echo "Cantidad de productos: " . $rolex5 . "<br><br>";
    echo "Precio x articulo: $7,970<br>";
    $precio_articulo=7970;
    $descuento=$precio_articulo * $rolex5;
    if($descuento > 3000){
        echo "<br>¡¡FELIZIDADEZ!!<br>";
        echo "Usted obtubo un descuento del '10%'<br>";
        echo "Devido a que su compra supero los $3000 en su compra<br>";
        $descuento=$descuento * 0.90;
        echo "por lo tanto su total a pagar es de: <br> <h2>" . $descuento . "</h2>";
    }
    else{
        echo "Lo lamentamos pero no pudo obtener algun descuento<br>";
        echo "Devido a que su compra no supero los $3000<br><br>";
        echo "Su total a pagar es de: <br> <h2>" . $descuento . "</h2><br><br>";
    }
}
elseif($rolex6 > 0){
    echo "Producto: bix-rlx <br>";
    echo "Cantidad de productos: " . $rolex6 . "<br><br>";
    echo "Precio x articulo: $3,870<br>";
    $precio_articulo=3870;
    $descuento=$precio_articulo * $rolex6;
    if($descuento > 3000){
        echo "<br>¡¡FELIZIDADEZ!!<br>";
        echo "Usted obtubo un descuento del '10%'<br>";
        echo "Devido a que su compra supero los $3000 en su compra<br>";
        $descuento=$descuento * 0.90;
        echo "por lo tanto su total a pagar es de: <br> <h2>" . $descuento . "</h2>";
    }
    else{
        echo "Lo lamentamos pero no pudo obtener algun descuento<br>";
        echo "Devido a que su compra no supero los $3000<br><br>";
        echo "Su total a pagar es de: <br> <h2>" . $descuento . "</h2><br><br>";
    }
}
elseif($rolex7 > 0){
    echo "Producto: Galactic-rlx <br>";
    echo "Cantidad de productos: " . $rolex7 . "<br><br>";
    echo "Precio x articulo: $1,224<br>";
    $precio_articulo=1224;
    $descuento=$precio_articulo * $rolex7;
    if($descuento > 3000){
        echo "<br>¡¡FELIZIDADEZ!!<br>";
        echo "Usted obtubo un descuento del '10%'<br>";
        echo "Devido a que su compra supero los $3000 en su compra<br>";
        $descuento=$descuento * 0.90;
        echo "por lo tanto su total a pagar es de: <br> <h2>" . $descuento . "</h2>";
    }
    else{
        echo "Lo lamentamos pero no pudo obtener algun descuento<br>";
        echo "Devido a que su compra no supero los $3000<br><br>";
        echo "Su total a pagar es de: <br> <h2>" . $descuento . "</h2><br><br>";
    }
}
elseif($rolex8 > 0){
    echo "Producto: Infinity-rlx <br>";
    echo "Cantidad de productos: " . $rolex8 . "<br><br>";
    echo "Precio x articulo: $727<br>";
    $precio_articulo=727;
    $descuento=$precio_articulo * $rolex8;
    if($descuento > 3000){
        echo "<br>¡¡FELIZIDADEZ!!<br>";
        echo "Usted obtubo un descuento del '10%'<br>";
        echo "Devido a que su compra supero los $3000 en su compra<br>";
        $descuento=$descuento * 0.90;
        echo "por lo tanto su total a pagar es de: <br> <h2>" . $descuento . "</h2>";
    }
    else{
        echo "Lo lamentamos pero no pudo obtener algun descuento<br>";
        echo "Devido a que su compra no supero los $3000<br><br>";
        echo "Su total a pagar es de: <br> <h2>" . $descuento . "</h2><br><br>";
    }
}
elseif($rolex9 > 0){
    echo "Producto: Basic-rlx <br>";
    echo "Cantidad de productos: " . $rolex9 . "<br><br>";
    echo "Precio x articulo: $2,700<br><br>";
    $precio_articulo=2700;
    $descuento=$precio_articulo * $rolex9;
    if($descuento > 3000){
        echo "<br>¡¡FELIZIDADEZ!!<br>";
        echo "Usted obtubo un descuento del '10%'<br>";
        echo "Devido a que su compra supero los $3000 en su compra<br>";
        $descuento=$descuento * 0.90;
        echo "por lo tanto su total a pagar es de: <br> <h2>" . $descuento . "</h2>";
    }
    else{
        echo "Lo lamentamos pero no pudo obtener algun descuento<br>";
        echo "Devido a que su compra no supero los $3000<br><br>";
        echo "Su total a pagar es de: <br> <h2>" . $descuento . "</h2><br><br>";
    }
}
elseif($rolex10 > 0){
    echo "Producto: Unlimited-RLX <br>";
    echo "Cantidad de productos: " . $rolex10 . "<br><br>";
    echo "Precio x articulo: $15,790<br>";
    $precio_articulo=15790;
    $descuento=$precio_articulo * $rolex10;
    if($descuento > 3000){
        echo "<br>¡¡FELIZIDADEZ!!<br>";
        echo "Usted obtubo un descuento del '10%'<br>";
        echo "Devido a que su compra supero los $3000 en su compra<br>";
        $descuento=$descuento * 0.90;
        echo "por lo tanto su total a pagar es de: <br> <h2>" . $descuento . "</h2>";
    }
    else{
        echo "Lo lamentamos pero no pudo obtener algun descuento<br>";
        echo "Devido a que su compra no supero los $3000<br><br>";
        echo "Su total a pagar es de: <br> <h2>" . $descuento . "</h2><br><br>";
    }
}
else{
    echo "No se le aplico el descuento del 10% devido a que su compra no supero los 3,000 pesos en productos";
    echo "El precio a pagar es: " . $descuento . "<br><br>";
}

echo "¡¡¡Gracias por su compra!!!<br><br>";
echo "   VUELVA PRONTO   <br><br>";

echo "</main>";
?>

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

$correo=$_POST['correo'];
$rolex=$_POST["blackrolex"] ?? 0;
$rolex2=$_POST["goldex"] ?? 0;
$rolex3=$_POST["producto3"] ?? 0;
$rolex4=$_POST["producto4"] ?? 0;
$rolex5=$_POST["producto5"] ?? 0;
$rolex6=$_POST["producto6"] ?? 0;
$rolex7=$_POST["producto7"] ?? 0;
$rolex8=$_POST["producto8"] ?? 0;
$rolex9=$_POST["producto9"] ?? 0;
$rolex10=$_POST["producto10"] ?? 0;



$sql = "INSERT INTO ventas VALUES ('$correo', '$rolex', '$rolex2', '$rolex3', '$rolex4', '$rolex5', '$rolex6', '$rolex7', '$rolex8', '$rolex9', '$rolex10')";

if (mysqli_query($con, $sql))
{
    echo "El registro del pedido se realizo con éxito";
}else{
    echo "Error: " . $sql . "<br/>" . mysqli_error($con);
}
mysqli_close($con);




echo '<br/><br/><a href="../index.php"> Regresar </a>';

echo "<br><br><br>";

?>






