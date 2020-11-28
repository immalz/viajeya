<?php

session_start();

require 'database.php';

if (isset($_SESSION['cliente_id'])) {
    $records = $conn->prepare('SELECT id, nombre, correo, contraseña from clientes WHERE id= :id');
    $records->bindParam(':id', $_SESSION['cliente_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $cliente = null;

    if (count($results) > 0) {
        $cliente = $results;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViajeYa!</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/general.css">
</head>

<body>

    <?php require 'partials/navbar.php' ?>

    <main class="main" style="padding-top: 100px;">
        <?php if (!empty($cliente)) : ?>
            <br>Bienvenido: <h1><?= $cliente['nombre']; ?></h1>
            <br> Has iniciado sesión correctamente
            <a href="logout.php">Cerrar Sesión</a>
            <hr>
            <br> Si eres admin, entra a tu panel aqui:
            <a href="/NUEVATIENDA/pagesadmin/paneladmin.php">Dashboard</a>

        <?php else : ?>
            <h1>Por favor Inicia sesion o registrate</h1>

            <a href="login.php">Login</a>
            <a href="registro.php">Registro</a>

        <?php endif; ?>
    </main>
</body>

</html>