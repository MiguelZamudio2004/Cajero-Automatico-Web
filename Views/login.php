<?php
include '../Config/conexion.php';

$conexion = conectar();

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia Sesion</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<header class="encabezado">
    <h1 class="titulo-encabezado"> 💳 Cajero Automatico</h1>
</header>

<body>
    <section class="form-login">
        
        <h2>👤 Inicia Sesion</h2>
        
        <label>Digite su usuario o correo electronico:</label>
        <input class="cajas" type="text" name="usuario" placeholder="Usuario o Correo Electronico">
        <label>Digite su contraseña:</label>
        <input class="cajas" type="password" name="contraseña" placeholder="Contraseña">

        <p>No tiene una cuenta? <a href="registro.html">Registrese aqui</a></p>
        <a href="recuperar.html">No tiene acceso a su cuenta?</a>

        <input class="button" type="submit" value="Iniciar Sesion">

    </section>
</body>

<footer  class="foot">
    <p> &copy; Jose Miguel Cruz Zamudio.</p>
    <h2 class="titulo-foot">Soporte a cliente</h2>
    <ul>
        <li><img src="../Public/Telefono.png" class="logo">496 961 7310</li>
        <li><img src="../Public/Correo.png" class="logo">cajero@automatico.com</li>
    </ul>
</footer>
</html>