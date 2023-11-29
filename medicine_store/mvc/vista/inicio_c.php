<?php
include("template/header.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/inicio.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inicio | Medicine Store</title>

</head>

<body>
    <section class="banner">
        <img src="img/capsula1.jpg">
    </section>

    <section class="icons">
        <section class="container container-features">
            <div class="card-feature">
                <i class='bx bxs-offer'></i>
                <div class="feature-content">
                    <span>Promociones</span>
                </div>
            </div>
            <div class="card-feature">
                <i class='bx bxs-capsule'></i>
                <div class="feature-content">
                    <span>Medicamentos</span>
                </div>
            </div>
            <div class="card-feature">
                <i class='bx bxs-home-heart'></i>
                <div class="feature-content">
                    <span>Hogar</span>
                </div>
            </div>
            <div class="card-feature">
                <i class='bx bxs-camera-plus'></i>
                <div class="feature-content">
                    <span>Salud</span>
                </div>
            </div>
            <div class="card-feature">
                <i class='bx bx-male-female'></i>
                <div class="feature-content">
                    <span>Salud Sexual</span>
                </div>
            </div>
            <div class="card-feature">
                <i class='bx bxs-baby-carriage'></i>
                <div class="feature-content">
                    <span>Maternidad</span>

                </div>
            </div>
            <div class="card-feature">
                <i class='bx bx-heart-circle'></i>
                <div class="feature-content">
                    <span> Belleza</span>

                </div>
            </div>

        </section>
    </section>
    <section id="producto1" class="section-p1">
        <h2>Productos del Mes</h2>
        <div class="pro-container">
            <div class="pro">
                <img src="img/1.jpg" alt="">
                <div class="des">
                    <span>Abbott</span>
                    <a href="producto1.php"><h5>Pedialyte Active Manzana Abbott Frasco x 500 ml</h5></a>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                        <i class='bx bx-star'></i>
                    </div>
                    <h4>$8.500</h4>
                </div>
                <button class="i" onclick="agregarC()">
                    <div class="car">
                        <h5>Agregar al carrito <i class='bx bxs-cart-add'></i></h5>
                    </div>
                </button>
            </div>
            <div class="pro">
                <img src="img/2.jpg" alt="">
                <div class="des">
                    <span>Genfar</span>
                    <a href="producto2.php"><h5>Azitromicina 500 mg 3 Tabletas</h5></a>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <h4>$43.200</h4>
                </div>
                <button class="i" onclick="agregarC()">
                    <div class="car">
                        <h5>Agregar al carrito <i class='bx bxs-cart-add'></i></h5>
                    </div>
                </button>
            </div>
            <div class="pro">
                <img src="img/3.jpg" alt="">
                <div class="des">
                    <span>BAYER</span>
                    <h5>Apronax 275 Mg Caja X 8 Tabletas Naproxeno 275 Mg</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>$15.000</h4>
                </div>
                <button class="i" onclick="agregarC()">
                    <div class="car">
                        <h5>Agregar al carrito <i class='bx bxs-cart-add'></i></h5>
                    </div>
                </button>
            </div>
            <div class="pro">
                <img src="img/4.jpg" alt="">
                <div class="des">
                    <span>PROTER GAMBLE</span>
                    <h5>Vick Mentol Fracción Sobre x 5 Pastillas</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                        <i class='bx bx-star'></i>
                    </div>
                    <h4>$14.600</h4>
                </div>
                <button class="i" onclick="agregarC()">
                    <div class="car">
                        <h5>Agregar al carrito <i class='bx bxs-cart-add'></i></h5>
                    </div>
                </button>
            </div>
    </section>
    <section class="barra">
        <h1> Marcas Destacadas</h1>
    </section>
    <section class="marca">
        <section class="marcas">
            <div class="laboratorio">
                <img src="img/bayer.png">
            </div>
            <div class="laboratorio">
                <img src="img/tecnoquimicas.png">
            </div>
            <div class="laboratorio">
                <img src="img/aboot.jfif">
            </div>
            <div class="laboratorio">
                <img src="img/genfar.png">
            </div>
            <div class="laboratorio">
                <img src="img/sanofi.png">
            </div>
            <div class="laboratorio">
                <img src="img/ringer.png">
            </div>
            <div class="laboratorio">
                <img src="img/pfizer.png">
            </div>
        </section>
    </section>

    <section id="producto2">
        <section id="producto1" class="section-p1">
            <h2>Nuestros Productos</h2>
            <div class="pro-container">
                <div class="pro">
                    <img src="img/1.jpg" alt="">
                    <div class="des">
                        <span>Abbott</span>
                        <a href="producto1.php"><h5>Pedialyte Active Manzana Abbott Frasco x 500 ml</h5></a>
                        <div class="star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <h4>$8.500</h4>
                    </div>
                    <button class="i" onclick="agregarC()">
                    <div class="car">
                        <h5>Agregar al carrito <i class='bx bxs-cart-add'></i></h5>
                    </div>
                </button>
                </div>
                <div class="pro">
                    <img src="img/2.jpg" alt="">
                    <div class="des">
                        <span>Genfar</span>
                        <a href="producto2.php"><h5>Azitromicina 500 mg 3 Tabletas</h5></a>
                        <div class="star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>$43.200</h4>
                    </div>
                    <button class="i" onclick="agregarC()">
                    <div class="car">
                        <h5>Agregar al carrito <i class='bx bxs-cart-add'></i></h5>
                    </div>
                </button>
                </div>
                <div class="pro">
                    <img src="img/3.jpg" alt="">
                    <div class="des">
                        <span>BAYER</span>
                        <h5>Apronax 275 Mg Caja X 8 Tabletas Naproxeno 275 Mg</h5>
                        <div class="star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <h4>$15.000</h4>
                    </div>
                    <button class="i" onclick="agregarC()">
                    <div class="car">
                        <h5>Agregar al carrito <i class='bx bxs-cart-add'></i></h5>
                    </div>
                </button>
                </div>
                <div class="pro">
                    <img src="img/4.jpg" alt="">
                    <div class="des">
                        <span>PROTER GAMBLE</span>
                        <h5>Vick Mentol Fracción Sobre x 5 Pastillas</h5>
                        <div class="star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <h4>$14.600</h4>
                    </div>
                    <button class="i" onclick="agregarC()">
                    <div class="car">
                        <h5>Agregar al carrito <i class='bx bxs-cart-add'></i></h5>
                    </div>
                </button>
                </div>
            </div>
        </section>
    </section>

    
<script type="text/javascript">
        function agregarC(){
            alert("Producto agregado al carrito correctamente")
        }
    </script>
</body>

</html>
<?php
include("template/footer.php");
?>