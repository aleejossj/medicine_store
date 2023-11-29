<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/pedido.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Pedidos | Medicine Store</title>
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
                    <li id="home"><a href="admin.php"><i class='bx bxs-home'></i></a>
                    <!--    
                    <li><input type="text" name="txt" placeholder="Buscar" id="Buscar"></li>
                    <li><a href="nosotros.php">Categoria</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="#">Quienes Somos</a></li>
                    <li><a href="#">Contáctanos</a></li>-->
                </ul>
            </div>
        </nav>

    </header>

    <main>
        <section class="pedido">
            <h3>Pedido N°1</h3>
            <div class="menu">
                <ul>
                    <ul>Id Usuario</ul>
                    <ul>Nombre Cliente</ul>
                    <ul>Cantidad Productos</ul>
                    <ul>Productos</ul>
                    <ul>Total Compra </ul>
                </ul>
                <button class="button1" onclick="aprobar()">Aprobar<div class="icon"><i class='bx bx-check'></i></div></button>
                <button class="button1">Rechazar <div class="icon"><i class='bx bx-x'></i></div></button>
        </section>
        <section class="pedido">
            <h3>Pedido N°2</h3>
            <div class="menu">
                <ul>
                    <ul>Id Usuario</ul>
                    <ul>Nombre Cliente</ul>
                    <ul>Cantidad Productos</ul>
                    <ul>Productos</ul>
                    <ul>Total Compra </ul>
                </ul>
            </div>
            <button class="button1" onclick="aprobar()">Aprobar<div class="icon"><i class='bx bx-check'></i></div></button>
            <button class="button1">Rechazar <div class="icon"><i class='bx bx-x'></i></div></button>
        </section>
        <section class="pedido">
            <h3>Pedido N°3</h3>
            <div class="menu">
                <ul>
                    <ul>Id Usuario</ul>
                    <ul>Nombre Cliente</ul>
                    <ul>Cantidad Productos</ul>
                    <ul>Productos</ul>
                    <ul>Total Compra </ul>
                </ul>
            </div>
            <button class="button1" onclick="aprobar()">Aprobar<div class="icon"><i class='bx bx-check'></i></div></button>
            <button class="button1" onclick="rechazar()">Rechazar<div class="icon"><i class='bx bx-x'></i></div></button>
        </section>
        <section class="pedido">
            <h3>Pedido N°4</h3>
            <div class="menu">
                <ul>
                    <ul>Id Usuario</ul>
                    <ul>Nombre Cliente</ul>
                    <ul>Cantidad Productos</ul>
                    <ul>Productos</ul>
                    <ul>Total Compra </ul>
                </ul>
            </div>
            <button class="button1" onclick="aprobar()">Aprobar<div class="icon"><i class='bx bx-check'></i></div></button>
            <button class="button1" onclick="rechazar()">Rechazar<div class="icon"><i class='bx bx-x'></i></div></button>
        </section>
        <section class="pedido">
            <h3>Pedido N°5</h3>
            <div class="menu">
                <ul>
                    <ul>Id Usuario</ul>
                    <ul>Nombre Cliente</ul>
                    <ul>Cantidad Productos</ul>
                    <ul>Productos</ul>
                    <ul>Total Compra </ul>
                </ul>
            </div>
            <button class="button1" onclick="aprobar()">Aprobar<div class="icon"><i class='bx bx-check'></i></div></button>
            <button class="button1" onclick="rechazar()">Rechazar<div class="icon"><i class='bx bx-x'></i></div></button>
        </section>
    </main>

    <script type="text/javascript">
        function aprobar(){
            alert("Pedido aprobado")
        }
        function rechazar(){
            alert("Pedido rechazado")
        }
        
    </script>
</body>

</html>
<?php
include("template/footer.php");
?>