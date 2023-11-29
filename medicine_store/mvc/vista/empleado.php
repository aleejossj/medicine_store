
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/pagina.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Panel Empleado | Medicine Store</title>
</head>

<body>
    <header>
        <div class="container-hero">
            <img src="img/logo.jpg-removebg-preview.png">
            <h1 class="logo"><a href="/">Medicine Store</a></h1>
        </div>
        <nav>
            <div class="menu">
                <ul>
                    <li id="home"><a href="empleado.php"><i class='bx bxs-home'></i></a>
                    <!--<li><input type="text" name="txt" placeholder="Buscar" id="Buscar"></li>
                    <li><a href="nosotros.php">Quienes somos</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="#">Galeria fotografica</a></li>
                    <li><a href="#">Contactanos</a></li>-->
                </ul>
            </div>
        </nav>
    </header>

    <section id="inter">
        <h2>SERVICIOS</h2>
        <div class="sec1-container">
            <div class="sec1">
                <img src="img/ventas.jpg" alt="">
                <div class="des">
                    <a href="ventase.php"><h5>GESTION VENTAS</h5></a>
                </div>
            </div>
            <div class="sec1">
                <img src="img/pedido.png" alt="">
                <div class="des">
                    <a href="pedidose.php"><h5>GESTION DE PEDIDOS</h5></a>
                </div>
            </div>
            <div class="sec1">
                <img src="img/reportes.jpg" alt="">
                <div class="des">
                    <a href="reportese.php"><h5>GESTION DE REPORTES</h5></a>
                </div>

            </div>
    </section>
        
</body>

</html>
<?php
include("template/footer.php");
?>