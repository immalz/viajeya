<?php
session_start();
require '../database.php';

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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/footerauser.css">
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/general.css">
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/dashboard.css">
</head>

<body>
    <main>
        <!--BARRA LATERAL DE MENU -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="paneladmin.php">
                <div class="sidebar-brand-icon">
                    <img src="/NUEVATIENDA/assets/img/user.png" style="width: 50px;">
                </div>
                <div class="sidebar-brand-text mx-3">
                    <?php if (!empty($cliente)) : ?>
                        <span><?= $cliente['nombre']; ?></span>
                    <?php endif; ?>
                </div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>
                    <?php if (!empty($cliente)) : ?>
                        <span><?= $cliente['correo']; ?></span>
                    <?php endif; ?>
                    </span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">Opciones</div>

            <li class="nav-item">
                <a class="nav-link" href="/NUEVATIENDA/pages/reserva.php">
                    <i class="fas fa-history"></i>
                    <span>Reservas</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/NUEVATIENDA/pages/flota.php">
                    <i class="fas fa-users-cog"></i>
                    <span>Flota</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/NUEVATIENDA/pages/usuarios.php">
                    <i class="fas fa-users-cog"></i>
                    <span>Usuarios</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="/NUEVATIENDA/logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Cerra sesión</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
    </main>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/NUEVATIENDA/assets/js/dashboard.js">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>

</html>