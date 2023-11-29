<?php
include("template/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/producto.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<title>Today Long Action | Medicine Store</title>

</head>
<body>
		<main>
			<div class="img">
			<img src="img/12.jpg" witdh="250px" height="250px">
			</div>
		<div class="producto">
			<h1>Today Long Action Empaque Con 8 Unidades</h1><br>
			<div class="presentacion">
			<h3>Descripcion</h3><br>
		    </div>
			<div class="texto">
				<p>Prolonga tus mejores momentos con el lubricante de acción retardante del nuevo Today Long Action.
Por ser extra delgado te da más sensibilidad y mucho más placer.
Máxima seguridad, control de calidad electrónico, plena sensibilidad. </p>
			</div>
				<div class="conteiner">
					<div class="contador">
					<input type="number" name="" id="" placeholder="Seleccione la cantidad" value="1" min="1" max="15" class="input-c">
			
				</div>
				</div>

				<button class="add" onclick="aviso()">
					<i class='bx bx-plus'></i>Añadir al carrito 
				</button>
				
				<button class="comprar" onclick="avisoCompra()">
					Comprar
				</button>
		</div><br>
			</main>
			<h2>Otros Productos</h2>
		<section class="tabla">

	        <table id="imgs">
	            	<td><a href="producto1.php"><img id="img" src="img/2.jpg"></a></td>
	                <td><a href="producto2.php"><img id="img" src="img/3.jpg"></td></a>
	                <td><a href="producto3.php"><img id="img" src="img/4.jpg"></td></a>
	                <td><a href="producto5.php"><img id="img" src="img/5.jpg"></td></a>
	                <td><a href="producto6.php"><img id="img" src="img/6.jpg"></td></a>
	        </table>
    	</section>    	
				<script>
				function aviso() {
					alert("Agregado al carrito correctamente");
				}
				function avisoCompra() {
					alert("Compra exitosa");
				}
				</script>
				
		
    </body>
    </html>
<?php
include("template/footer.php");
?>