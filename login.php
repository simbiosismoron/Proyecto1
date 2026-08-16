<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!empty($_POST["correo"]) && !empty($_POST["contraseña"])) {
        
        if ($_POST["correo"] == "diegoamade.111@hotmail.com" && $_POST["contraseña"] == "nemoterrilosamo2") {
            $_SESSION["correo"] = $_POST["correo"];
            header("Location: priv.php");
            exit;
            } 
            else { ?>
       <script>alert("Usuario no encontrado")</script>     
<?php }
}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if (isset($_SESSION["correo"])){ ?>
        <?php header("Location: priv.php") ?>
        </p>
   <?php } else { ?>
            <div class="container">
                <h2 id="logo">ImpResidual</h2>
                <form id="formulario" action="" method="POST">
                        <div class="label">
                            <label for="correo">Correo electronico</label>
                            <input id="correo" type="text" name="correo">
                        </div>
                        <div class="label">
                            <label for="contraseña">Contraseña</label>
                            <input id="contraseña "type="password" name="contraseña">
                        </div>
                        <input id="boton" type="submit" value="Enviar">
                    </form>
                </div>
        <?php } ?>                
</body>
</html>