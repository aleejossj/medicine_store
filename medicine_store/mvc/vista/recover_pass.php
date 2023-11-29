<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="css/recover_pass.css">
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
					<label for="" aria-hidden="true">Recuperar Contraseña</label>
                    <label for="" aria-hidden="true" id="text">Ingrese su correo electronico para enviar un codigo de verificación para que pueda recuperar su Contraseña</label>
					<input type="email" name="email" placeholder="Correo" required="">
					
					<button><a href="recover_pass2.php">Enviar Código</a></button>
				</form>
			</div>

			
	</div>
</body>
</html>