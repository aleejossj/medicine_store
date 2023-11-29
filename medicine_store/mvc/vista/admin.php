<?php
include("template/header_admin.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/pagina.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Panel Admin | Medicine Store</title>

</head>

<body>


    <section id="inter">
        <h2>ADMINISTRACION</h2>
        <div class="sec1-container">
            <div class="sec1">
                <img src="img/farmacia.jpg" alt="">
                <div class="des">
                    <a href="inventario.php"><h5>GESTION DE INVENTARIO</h5></a>
                </div>
            </div>
            <div class="sec1">
                <img src="img/ventas.jpg" alt="">
                <div class="des">
                    <a href="ventas.php"><h5>GESTION VENTAS</h5></a>
                </div>
            </div>
            <div class="sec1">
                <img src="img/pedido.png" alt="">
                <div class="des">
                    <a href="pedidos.php"><h5>GESTION DE PEDIDOS</h5></a>
                </div>
            </div>
            <div class="sec1">
                <img src="img/reportes.jpg" alt="">
                <div class="des">
                    <a href="reportes.php"><h5>GESTION DE REPORTES</h5></a>
                </div>

            </div>
    </section>

</body>

</html>
<?php
include("../vista/template/footer.php");
?>