<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad Ethan, Agustin</title>
    <link rel="stylesheet" href="../css/actividad.css">
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.ico">
    <script type="text/javascript" src="js/micodigo.js"></script>
</head>
<body>
    
    <header>
        <h1>Venta de relojes</h1>
        <button class="button"><a href="../html/secion.html">Iniciar Sesión</a></button>
    </header>
    <main>
        <h2>Conoce la gran variedad de productos que tenemos para ti!!</h2>
        <h5>Estamos capacitados para darte la mejor experiencia dentro de nuestra página. ¡¡¡BIENVENIDO!!!!</h5>

        <form action="indez2.php" method="post">

    <div class="correo">
        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required>
    </div>
    
    <div class="producto">
        <img src="../img/producto1.jpg" alt="Producto 1">
        <h2>Black rolex </h2>
        <p>Descripción del Producto 1.</p>
        <p>Precio: $1,257</p>
        <input type="number" name="blackrolex" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="../img/producto2.jpg" alt="Producto 2">
        <h2>Goldex</h2>
        <p>Descripción del Producto 2.</p>
        <p>Precio: $2,250</p>
        <input type="number" name="goldex" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="../img/producto3.jpg" alt="Producto 3">
        <h2>Producto 3</h2>
        <p>Descripción del Producto 3.</p>
        <p>Precio: $1,500</p>
        <input type="number" name="producto3" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="../img/producto4.jpg" alt="Producto 4">
        <h2>Producto 4</h2>
        <p>Descripción del Producto 4.</p>
        <p>Precio: $3,000</p>
        <input type="number" name="producto4" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="../img/producto5.jpg" alt="Producto 5">
        <h2>Producto 5</h2>
        <p>Descripción del Producto 5.</p>
        <p>Precio: $2,800</p>
        <input type="number" name="producto5" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="../img/producto6.jpg" alt="Producto 6">
        <h2>Producto 6</h2>
        <p>Descripción del Producto 6.</p>
        <p>Precio: $1,800</p>
        <input type="number" name="producto6" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="../img/producto7.jpg" alt="Producto 7">
        <h2>Producto 7</h2>
        <p>Descripción del Producto 7.</p>
        <p>Precio: $2,100</p>
        <input type="number" name="producto7" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="../img/producto8.jpg" alt="Producto 8">
        <h2>Producto 8</h2>
        <p>Descripción del Producto 8.</p>
        <p>Precio: $3,500</p>
        <input type="number" name="producto8" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="../img/producto9.jpg" alt="Producto 9">
        <h2>Producto 9</h2>
        <p>Descripción del Producto 9.</p>
        <p>Precio: $2,950</p>
        <input type="number" name="producto9" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="../img/producto10.jpg" alt="Producto 10">
        <h2>Producto 10</h2>
        <p>Descripción del Producto 10.</p>
        <p>Precio: $4,200</p>
        <input type="number" name="producto10" placeholder="Cantidad">
    </div>

    <button type="submit"> Modificar </button>
    <button><a href="../php/consulta.php"> consultar </a></button>
</form>

    </main>
    <footer>
        <p>¡CONTÁCTANOS! Número: 7772310427</p>
        <p>O por correo: actividadespindola@gmail.com</p>
        <h6>Sergio Ethan Corona Hernández, Agustin Uribe</h6><br>
    </footer>


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

mysqli_query ($conexion, "UPDATE ventas set rolex='$rolex', rolex2='$rolex2', rolex3='$rolex3',rolex4='$rolex4',rolex5='$rolex5',rolex6='$rolex6',rolex7='$rolex7',rolex8='$rolex8',rolex9='$rolex9',rolex10='$rolex10'
          WHERE correo='$correo'")
         or die ("Error al eliminar los datos");
mysqli_close($conexion);
echo "Actualización exitosa. <br>";
echo "Si desea hacer otra actualización, regrese al formulario de actualizaciones.<br>";
?>


<br><button><a href="../index.php"> Regresar </a></button>
<br><br><br>
</body>
</html>
