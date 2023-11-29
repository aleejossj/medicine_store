<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/ventas.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Prompt:wght@300&display=swap');
</style>
    <title>Ventas | Medicine Store</title>
    <script>
        function eliminarFila(button) {
            // Obtén la fila que contiene el botón
            var fila = button.parentNode.parentNode;
            
            // Elimina la fila de la tabla
            fila.parentNode.removeChild(fila);
            alert("Venta elminada correctamente");
        }
    </script>
</head>
<body> 
    <header> 
    <div class="container-hero">
            <img src="img/logo.jpg-removebg-preview.png">
            <h1 class="logo"><a href="/">Medicine Store</a></h1>
        </div>    
        <nav>
            <ul>
                <li id="home"><a href="empleado.php"><i class='bx bxs-home'></i></a>
                    <!--<li><input type="text" name="txt" placeholder="Buscar" id="Buscar"></li>
                    <li><a href="#">Categorías</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="#">Quiénes somos</a></li>
                    <li><a href="#">Contáctanos</a></li>-->
            </ul>
        </nav>
    </header>
    <p><h1>Ventas realizadas</h1></p>
    <section>
        <table align="center">
            <tr>
                <th>Fecha</th>
                <th>Cliente</th>
                <th>Cantidad</th>
                <th>Valor</th>
                <th>Descripción</th>
                <th>Registrado por</th>
                <th>-</th>
            </tr>
            <tr>
                <td>22/08/2023</td>
                <td>Santiago Ramirez</td>
                <td>X2</td>
                <td>$17.500</td>
                <td>Pedialyte Active</td>
                <td>Administrador</td>
                <td><button onclick="eliminarFila(this)"><i class='bx bx-trash'></i></button></td>
            </tr>
            <tr>
                <td>23/08/2023</td>
                <td>Maria López</td>
                <td>X1</td>
                <td>$12.750</td>
                <td>Aspirina</td>
                <td>Administrador</td>
                <td><button onclick="eliminarFila(this)"><i class='bx bx-trash'></i></button></td>
            </tr>
            <tr>
                <td>24/08/2023</td>
                <td>Juan Perez</td>
                <td>X3</td>
                <td>$30.000</td>
                <td>Antibiótico</td>
                <td>Empleado</td>
                <td><button onclick="eliminarFila(this)"><i class='bx bx-trash'></i></button></td>
            </tr>
            <tr>
                <td>25/08/2023</td>
                <td>Laura Fernández</td>
                <td>X2</td>
                <td>$22.000</td>
                <td>Vitamina C</td>
                <td>Administrador</td>
                <td><button onclick="eliminarFila(this)"><i class='bx bx-trash'></i></button></td>
            </tr>
            <tr>
                <td>26/08/2023</td>
                <td>Carlos Rodriguez</td>
                <td>X1</td>
                <td>$8.500</td>
                <td>Analgesia</td>
                <td>Empleado</td>
                <td><button onclick="eliminarFila(this)"><i class='bx bx-trash'></i></button></td>
            </tr>
            <tr>
                <td>27/08/2023</td>
                <td>Ana Martinez</td>
                <td>X4</td>
                <td>$45.600</td>
                <td>Antihistamínico</td>
                <td>Administrador</td>
                <td><button onclick="eliminarFila(this)"><i class='bx bx-trash'></i></button></td>
            </tr>
            <tr>
                <td>28/08/2023</td>
                <td>Pedro Gutierrez</td>
                <td>X2</td>
                <td>$19.800</td>
                <td>Antiinflamatorio</td>
                <td>Empleado</td>
                <td><button onclick="eliminarFila(this)"><i class='bx bx-trash'></i></button></td>
            </tr>
        </table>
        
    </section>   
    <footer>
        <div class="footer-container">
            <div class="footer-content-container">
                <div class="lo">
                    <img src="img/RS.png">
                </div>
                <span class="footer-info">3215860568</span>
                <span class="footer-info">cavidsalud@gmail.com</span>
            </div>
            <div class="footer-menus">
                <div class="footer-content-container">
                    <span class="menu-title">menu</span>
                    <a href="" class="menu-item-footer">Categoria</a>
                    <a href="" class="menu-item-footer">Productos</a>
                    <a href="" class="menu-item-footer">Quienes Somos</a>
                    <a href="" class="menu-item-footer">Contáctanos</a>
                </div>
                <div class="footer-content-container">
                    <span class="menu-title">legal</span>
                    <a href="" class="menu-item-footer">Politicas de Privacidad</a>
                    <a href="" class="menu-item-footer">Cookies</a>
                    <a href="" class="menu-item-footer">Legal Advice</a>
                </div>
            </div>

            <div class="footer-content-container">
                <span class="menu-title">Nuestras Redes</span>
                <div class="social-container">
                    <span class="facebook">
                        <i class='bx bxl-facebook-circle'></i>
                    </span>
                    <span class="whatsApp">
                        <i class='bx bxl-whatsapp'></i>
                    </span>
                    <span class="instagram">
                        <i class='bx bxl-instagram'></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="copyright-container">
            <span class="copyright">© SUPER TIENDAS Y DROGUERIAS CAVID SALUD S.A.S. Todos los derechos reservados. NIT  9007379414</span>
        </div>
    </footer>
</body>
</html>