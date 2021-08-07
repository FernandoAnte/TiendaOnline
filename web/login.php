<?php
  include_once '../lib/helpers.php';
?>
<html lang="es">
 <head>
   <meta charset="utf-8">
   <title>Inicio de Sesión</title>
   <link rel="Stylesheet" href="css/login.css">
   <link rel="Stylesheet" href="css/bootstrap.css">
 </head>   
 <body>
	<form class="bg-secondary" action=" <?php echo getUrl("Acceso","Acceso","login",false,"ajax"); ?>"method="POST" >  
			<div class="form-group mt-4 text-warning">
			  <h2><b>INICIO DE SESIÓN</b></h2>
			</div> 
			<div class="form-group text-white">
			   <label>Usuario</label>
			   <input name="usuario"type="text" placeholder="Nickname o correo">
			</div> 
			<div class="form-group text-white mt-4">	
			   <label>Contraseña</label>
			   <input name="clave"type="password" placeholder="Contraseña">
			</div>
				<?php
					if (isset($_SESSION['mensaje'])){	
				?>
				<p class="text-danger"><?=$_SESSION['mensaje']?></p>
				<?php
				unset($_SESSION['mensaje']);
				}
				?>
			<input type="submit" value="INGRESAR" name="botoncito" class="bg-success text-white">
			<div class="mt-4">
			   <a href="" class="OlvideContraseña text-white">Olvidé mi contraseña</a>
			</div>
			<div class="opcion mt-4">
			   <a href="" class="CrearCuenta text-white">Crear una cuenta</a>
			</div>
	</form>
 </body>
</html>

