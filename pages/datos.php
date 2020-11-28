<?php
require '../database.php';

if (isset($_SESSION['cliente_id'])) {
    $records = $conn->prepare('SELECT id, nombre, correo, celular, telefono, direccion, imagen, contraseña from clientes WHERE id= :id');
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
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/user/datos.css">
</head>

<body>
    <main class="main">
    <?php require_once "dashboard/sidebar.php" ?>
        <div class="container mt-4">

            <div class="encabezado d-flex">
                <div class="imagen">
                <img src="/NUEVATIENDA/assets/img/user.png" style="width: 120px">
                </div>
                <div class="resumen">
                <?php if (!empty($cliente)) : ?>
                    <p>Nombre: <span><?= $cliente['nombre']; ?></span></p>
                    <p>Correo: <span><?= $cliente['correo']; ?></span></p>
                    <p>Contraseña: <span><?= $cliente['contraseña']; ?></span></p>
                    <p>Celular: <span><?= $cliente['nombre']; ?></span></p>
                    <p>Dirección: <span><?= $cliente['nombre']; ?></span></p>
                    <?php endif; ?>
                </div>
            </div>
            <h2>CAMBIAR INFORMACIÓN</h2>
            <form action="datos.php" >
                <div class="form-group ">
                    <label for="fotoperfil">Agrega Una foto de perfil</label>
                    <input type="text" class="form-control" placeholder="URL de la foto" id="fotoperfil">
                </div>
                <div class="form-group d-flex">
                    <input class="form-control mr-1" type="text" placeholder="nombre">
                    <input class="form-control ml-1" type="password" placeholder="contraseña">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="correo electronico">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="direccion">
                </div>
                <div class="form-group d-flex">
                    <input class="form-control mr-1" type="number" placeholder="+51 ...">
                    <input class="form-control ml-1" type="number" placeholder="01 ...">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Actualizar Datos</button>
                </div>
            </form>
        </div>

    </main>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/NUEVATIENDA/assets/js/dashboard.js">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>