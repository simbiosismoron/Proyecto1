<?php
session_start();
$error = null;

if (isset($_POST["email"]) && isset($_POST["password"])) {

	// Consulto si el password es valido
	if ($_POST["email"] == "matias@gmail.com" && $_POST["password"] == "1234") {
		// Guardo la sesion
		$_SESSION["email"] = $_POST["email"];
	} else {
		$error = "Por favor intente de nuevo.";
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	<?php if (isset($_SESSION["email"])) { ?>
		
		<p><?php echo "Sesion iniciada"; ?></p>

		<a href="cerrar.php">Cerrar Sesion</a>

	<?php } else { ?>
		<form action="index.php" method="post">
			<div>
				<label for="email">Email</label>
				<input name="email" type="text" id="email" />
			</div>
			<div>
				<label for="password">Password</label>
				<input name="password" type="password" id="password" />
			</div>
			<button>Enviar</button>
		</form>

		<?php if ($error != null) { ?>
			<p><?php echo $error ?></p>
		<?php } ?>
	
	<?php } ?>
</body>
</html>