<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad Ethan, Agustin</title>
    <link rel="stylesheet" href="css/actividad.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.ico">
    <script type="text/javascript" src="js/micodigo.js"></script>
</head>
<body>
    <nav class="list">
        <ul>
            <li><a href="html/index.html">Inicio</a></li>
            <li><a href="html/horarios.html">Horarios</a></li>
            <li><a href="html/vision.html">Visión</a></li>
            <li><a href="html/mision.html">Misión</a></li>
            <li><a href="html/table.html">Productos</a></li>
            <li><a href="html/secion.html">Sesión</a></li>
        </ul>
    </nav>
    <noscript><p>Si por error desactivaste JavaScript, actívalo nuevamente</p></noscript>
    <header>
        <h1>Venta de relojes</h1>
        <button class="button"><a href="html/secion.html">Iniciar Sesión</a></button>
    </header>
    <main>
        <h2>Conoce la gran variedad de productos que tenemos para ti!!</h2>
        <h5>Estamos capacitados para darte la mejor experiencia dentro de nuestra página. ¡¡¡BIENVENIDO!!!!</h5>

        <form action="php/tiket_compra.php" method="post">

    <div class="correo">
        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required>
    </div>
    
    <div class="producto">
        <img src="img/producto1.jpg" alt="Producto 1">
        <h2>Black rolex </h2>
        <p>Descripción del Producto 1.</p>
        <p>Precio: $1,257</p>
        <input type="number" name="blackrolex" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="img/producto2.jpg" alt="Producto 2">
        <h2>Goldex</h2>
        <p>Descripción del Producto 2.</p>
        <p>Precio: $2,250</p>
        <input type="number" name="goldex" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="img/producto3.jpg" alt="Producto 3">
        <h2>Producto 3</h2>
        <p>Descripción del Producto 3.</p>
        <p>Precio: $1,500</p>
        <input type="number" name="producto3" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="img/producto4.jpg" alt="Producto 4">
        <h2>Producto 4</h2>
        <p>Descripción del Producto 4.</p>
        <p>Precio: $3,000</p>
        <input type="number" name="producto4" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="img/producto5.jpg" alt="Producto 5">
        <h2>Producto 5</h2>
        <p>Descripción del Producto 5.</p>
        <p>Precio: $2,800</p>
        <input type="number" name="producto5" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="img/producto6.jpg" alt="Producto 6">
        <h2>Producto 6</h2>
        <p>Descripción del Producto 6.</p>
        <p>Precio: $1,800</p>
        <input type="number" name="producto6" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="img/producto7.jpg" alt="Producto 7">
        <h2>Producto 7</h2>
        <p>Descripción del Producto 7.</p>
        <p>Precio: $2,100</p>
        <input type="number" name="producto7" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="img/producto8.jpg" alt="Producto 8">
        <h2>Producto 8</h2>
        <p>Descripción del Producto 8.</p>
        <p>Precio: $3,500</p>
        <input type="number" name="producto8" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="img/producto9.jpg" alt="Producto 9">
        <h2>Producto 9</h2>
        <p>Descripción del Producto 9.</p>
        <p>Precio: $2,950</p>
        <input type="number" name="producto9" placeholder="Cantidad">
    </div>

    <div class="producto">
        <img src="img/producto10.jpg" alt="Producto 10">
        <h2>Producto 10</h2>
        <p>Descripción del Producto 10.</p>
        <p>Precio: $4,200</p>
        <input type="number" name="producto10" placeholder="Cantidad">
    </div>

    <button type="submit"> Comprar </button>
</form>
<button><a href="php/consulta.php"> consultar </a></button>
<button><a href="php/eliminar 3.php"> Eliminar </a></button>
<button><a href="php/indez2.php"> Modificar </a></button>

    </main>
    <footer>
        <p>¡CONTÁCTANOS! Número: 7772310427</p>
        <p>O por correo: actividadespindola@gmail.com</p>
        <h6>Sergio Ethan Corona Hernández, Agustin Uribe</h6><br>
    </footer>
</body>
</html>
