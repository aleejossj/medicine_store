<?php
include ("../modelo/con_db.php")
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login | Medicine Store</title>
</head>

<body>
<header>
        <div class="container-hero">
            <img src="img/logo.png">
            <h1 class="logo"><a href="/">Medicine Store</a></h1>
        </div>
        <nav>
            <div class="menu">
                <ul>
                    <li id="home"><a href="../index.php"><i class='bx bxs-home'></i></a>
                    <!--<li><input type="text" name="txt" placeholder="Buscar" id="Buscar"></li>
                    <li><a href="nosotros.php">Quienes somos</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="#">Galeria fotografica</a></li>
                    <li><a href="#">Contactanos</a></li>-->
                </ul>
            </div>
        </nav>

    </header>
    <div id="logo">
        <div class="main">
            <input type="checkbox" id="chk" aria-hidden="true">
            <div class="signup">
            <form method="post" action="registro.php">
                    <label for="chk" aria-hidden="true">Registrarse</label>
                    <input type="text" name="names" placeholder="Nombre Completo" required="">                    
                    <input type="number" name="number" placeholder="Telefono" required="">
                    <input type="text" name="direccion" placeholder="Dirección" required="">
                    <input type="email" name="email" placeholder="Correo" required="">
                    <input type="password" name="pswd" placeholder="Contraseña" required="">
                    <input type="password" name="pswd" placeholder="Confirmar Contraseña" required="">
                    <div id="r"><button>Registrarse</button></div>
                </form>
            </div>

            <div class="login">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <label for="chk" aria-hidden="true">Iniciar Sesión</label>
                    <div id="l">
                    <input type="email" name="email" placeholder="Correo" required="">
                    <input type="password" name="pswd" placeholder="Contraseña" required="">
                    <div id="rc">
                        <a href="recover_pass.php">¿Olvidó su Contraseña?</a>
                    </div>
                    </div>
                    <button id="loginButton">Iniciar Sesión</button>
                </form>
            </div>
        </div>

 
</body>

</html>
