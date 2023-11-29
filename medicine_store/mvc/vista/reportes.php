
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/reportes.css">
    <title>Reportes | Medicine Store</title>
</head>
<body>
    <header> 
        <div class="container-hero">
            <img src="img/logo.jpg-removebg-preview.png">
            <h1 class="logo"><a href="/">Medicine Store</a></h1>
        </div>    
        <nav>
            <ul>
                <li id="home"><a href="admin.php"><i class='bx bxs-home'></i></a></li>
            </ul>
        </nav>
    </header>
    <section> 
        <form>
            <h1>Reporte de Venta</h1><br>
            <label for="nombre_cliente">Nombre del Cliente:</label>
            <input type="text" id="nombre_cliente" name="nombre_cliente" required><br><br>

            <label for="producto_vendido">Producto Vendido:</label>
            <input type="text" id="producto_vendido" name="producto_vendido" required><br><br>

            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" required><br><br>

            <label for="precio_unitario">Precio Unitario:</label>
            <input type="number" id="precio_unitario" name="precio_unitario" required><br><br>

            <input type="button" value="Generar Reporte" id="g" onclick="agregarReporte()">
        </form>
    </section>
    <h1>Reportes</h1><br>
    <table border="1" id="tabla-reportes">
        <tr>
            <th>N° Reporte</th>
            <th>Cliente</th>
            <th>Cantidad de Productos</th>
            <th>Precio Unitario</th>
            <th>Total</th>
            <th>-</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Producto A</td>
            <td>5</td>
            <td>10000</td>
            <td>50000</td>
            <td><button onclick="descargar()"><i class='bx bxs-download' ></i></button></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Producto B</td>
            <td>3</td>
            <td>15000</td>
            <td>45000</td>
            <td><button onclick="descargar()"><i class='bx bxs-download' ></i></button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Producto B</td>
            <td>1</td>
            <td>5000</td>
            <td>5000</td>
            <td><button onclick="descargar()"><i class='bx bxs-download' ></i></button></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Producto B</td>
            <td>4</td>
            <td>1500</td>
            <td>6000</td>
            <td><button onclick="descargar()"><i class='bx bxs-download' ></i></button></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Producto B</td>
            <td>3</td>
            <td>1500</td>
            <td>4500</td>
            <td><button onclick="descargar()"><i class='bx bxs-download' ></i></button></td>
        </tr>
    </table>
    <br>
    
    <script>
        function agregarReporte() {
    // Obtener los valores del formulario
    var nombreCliente = document.getElementById("nombre_cliente").value;
    var productoVendido = document.getElementById("producto_vendido").value;
    var cantidad = document.getElementById("cantidad").value;
    var precioUnitario = document.getElementById("precio_unitario").value;
    var total = cantidad * precioUnitario;

    // Obtener la tabla
    var tabla = document.getElementById("tabla-reportes");

    // Crear una nueva fila
    var fila = tabla.insertRow(-1);

    // Insertar celdas en la fila
    var celdaNumero = fila.insertCell(0);
    var celdaCliente = fila.insertCell(1);
    var celdaCantidad = fila.insertCell(2);
    var celdaPrecioUnitario = fila.insertCell(3);
    var celdaTotal = fila.insertCell(4);
    var celdaDescargar = fila.insertCell(5);

    // Establecer los valores de las celdas
    celdaNumero.innerHTML = tabla.rows.length - 1; // Número de fila
    celdaCliente.innerHTML = nombreCliente;
    celdaCantidad.innerHTML = cantidad;
    celdaPrecioUnitario.innerHTML = precioUnitario;
    celdaTotal.innerHTML = total.toFixed(2);

    // Crear un botón de descarga
    var botonDescargar = document.createElement("button");
    var iconoDescargar = document.createElement("i");
    iconoDescargar.className = 'bx bxs-download';
    botonDescargar.appendChild(iconoDescargar);

    // Agregar el botón de descarga a la celda
    celdaDescargar.appendChild(botonDescargar);

    // Limpiar el formulario
    document.getElementById("nombre_cliente").value = "";
    document.getElementById("producto_vendido").value = "";
    document.getElementById("cantidad").value = "";
    document.getElementById("precio_unitario").value = "";
}
function descargar(){
    alert("Reporte descargado correctamente");
    }
    </script>

</body>
</html>
<?php
include("template/footer.php");
?>
