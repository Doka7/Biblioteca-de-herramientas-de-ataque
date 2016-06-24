<!DOCTYPE html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Formulario de ataques">
	<meta name="author" content="Alejandro Docasar Moreno">

	<title>Eliminar herramienta</title>

	<!-- Favicon -->
	<link rel="icon" 
	type="image/png" 
	href="kali.png">

	<!-- CSS -->
	<link rel="stylesheet" href="formulario.css" type="text/css" media="all">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css"> 

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

	<!-- Jquery -->
	<script src="jquery-1.12.3.min.js" type="text/javascript"></script> 

</head>

<body>

<?php
  session_start();
  header("Cache-control: private");
  header("Cache-control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  if(isset($_SESSION['usuario']) ==null) {
    header("Location: http://localhost/registro.php"); /* Redirección del navegador */
  }
  ?>

	<div class="container">

		<div class="page-header">
			<h1>Eliminar herramienta</h1>
			<p>Busque y encuentre la herramienta más adecuada para sus fines.</p>      
		</div>

		<form id="delete" class="form-horizontal" method="post" action="">

		<?php

			try {

			
			$ID_ATAQUE = $_POST['id_tool'];
			$NOMBRE = $_POST['nombre'];
			$DESCRIPCION = $_POST['description'];

			if ($CONFIRMADO == null) {			

			echo '
			<fieldset>
				<legend>Confirmación de eliminación de herramienta </legend>
				<p>¿Está seguro/a de que desea eliminar la herramienta?</p>
			</fieldset>
			<div class="volver">
				<input class="btn btn-default" type="submit" name="eliminar" id="eliminar" value="Eliminar">
				<input type="hidden" name="id_1" value=" ' . $ID_ATAQUE . '">
				<input type="hidden" name="name_1" value=" ' . $NOMBRE . '">
				<input type="hidden" name="description_1" value=" ' . $DESCRIPCION . '">
			</div>
			<div class="volver">
							<a href="gestor_tool.php">
								<button type="button" class="btn btn-default" aria-label="Left Align">
									<span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Volver
								</button>
							</a>
						</div>
						<br>
		</form>';

	}

	//Abrir conexión con la BBDD utilizando PDO
			$con = new PDO('mysql:host=localhost;dbname=Biblioteca de ataques', 'root', 'jjrch8mini');
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  	//Recuperación de parámetros.
			$ID_ATAQUE = $_POST['id_1'];
			$NOMBRE = $_POST['name_1'];
			$DESCRIPCION = $_POST['description_1'];
			$CONFIRMADO = $_POST['eliminar'];

  	//Borramos la herramienta seleccionada.

			if ($CONFIRMADO != null) {			

				$borrado = "DELETE FROM `Analisis_vulnera` WHERE ID_ATAQUE = $ID_ATAQUE";
				$stmt = $con->prepare($borrado); 
				$stmt->execute();

				$borrado = "DELETE FROM `Contrasenas` WHERE ID_ATAQUE = $ID_ATAQUE";
				$stmt = $con->prepare($borrado); 
				$stmt->execute();

				$borrado = "DELETE FROM `Exploit` WHERE ID_ATAQUE = $ID_ATAQUE";
				$stmt = $con->prepare($borrado); 
				$stmt->execute();

				$borrado = "DELETE FROM `Informes` WHERE ID_ATAQUE = $ID_ATAQUE";
				$stmt = $con->prepare($borrado); 
				$stmt->execute();

				$borrado = "DELETE FROM `Ingenieria_inversa` WHERE ID_ATAQUE = $ID_ATAQUE";
				$stmt = $con->prepare($borrado); 
				$stmt->execute();

				$borrado = "DELETE FROM `Maintaining_access` WHERE ID_ATAQUE = $ID_ATAQUE";
				$stmt = $con->prepare($borrado); 
				$stmt->execute();

				$borrado = "DELETE FROM `Recopilacion_info` WHERE ID_ATAQUE = $ID_ATAQUE";
				$stmt = $con->prepare($borrado); 
				$stmt->execute();

				$borrado = "DELETE FROM `Sistemas_operativos` WHERE ID_ATAQUE = $ID_ATAQUE";
				$stmt = $con->prepare($borrado); 
				$stmt->execute();

				$borrado = "DELETE FROM `Sniff_Spoof_Foren` WHERE ID_ATAQUE = $ID_ATAQUE";
				$stmt = $con->prepare($borrado); 
				$stmt->execute();

				$borrado = "DELETE FROM `Wireless` WHERE ID_ATAQUE = $ID_ATAQUE";
				$stmt = $con->prepare($borrado); 
				$stmt->execute();

				$borrado = "DELETE FROM `Ataques` WHERE ID_ATAQUE = $ID_ATAQUE";
				$stmt = $con->prepare($borrado); 
				$stmt->execute();

				header("Location: http://localhost/gestor_tool.php"); /* Redirección del navegador */
		}

	}catch(PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}

# close the connection
				$DBH = null;

				?>

			</div>
		</body>