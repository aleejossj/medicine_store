<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/recover_pass.css">
	<title>Recuperar Contraseña</title>
</head>
<body>
	
	<div id="img-container">
		<img src="img/logo.png" width="125" height="120">
	</div>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form>
					<label for="chk" aria-hidden="true">Recuperar Contraseña</label>
                    <label for="chk" aria-hidden="true" id="text">Ingrese el código que le llego al correo</label>
					<input type="number" name="code" placeholder="Codigo" required="">
					
					<button><a href="recover_pass3.php">Validar Código</a></button>
				</form>
			</div>

			
	</div>
</body>
</html>