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
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/general.css">
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/admin/flota.css">
</head>

<body>

    <main class="main">
        <?php require_once "dashboard/sidebar.php" ?>

        <div class="container">
            <!--SECCION PRINCIPAL-->
            <section class="guardar-vehiculo">
                <h2>Añadir un vehiculo</h2>
                <form action="../../php/guardar-vehiculo.php" method="POST" id="formulario">
                <img src="/NUEVATIENDA/assets/img/logo-empresa.png" alt="Viaje ya!">
                    <input name="cod_v" type="text" placeholder="codigo vehiculo" required>
                    <p>Tipo de Vehiculo</p>
                    <select name="cbtipo" required>
                        <option value="">...</option>
                        <?php

                        $tipo1 = "SELECT * FROM t_vehiculo";
                        $tipo2 = mysqli_query($link, $tipo1);

                        while ($row = mysqli_fetch_array($tipo2)) {
                            $cod_tipov = $row['cod_tipov'];
                            $capacidad = $row['capacidad'];
                            $nombre = $row['nombre'];
                        ?>

                            <option value="<?php echo $cod_tipov ?>"><?php echo $nombre ?></option>

                        <?php
                        }
                        ?>


                    </select>
                    <input name="capacidad" type="number" placeholder="capacidad de pasajeros" required>
                    <input name="marca" type="text" placeholder="marca" required>
                    <input name="modelo" type="text" placeholder="modelo" required>
                    <select name="cbmodo" required>
                        <option value="0">modo</option>
                        <option value="automatico">automatico</option>
                        <option value="mecanico">mecanico</option>
                    </select>
                    <input name="precio" type="number" placeholder="precio diario" required>
                    <input name="imagen" type="text" placeholder="link img" required>
                    <input name="guardar-vehiculo" type="submit" value="GUARDAR">
                </form>
            </section>
            <section class="principal">
                <div class="flota" id="flota">


                    <?php
                    $sql = "SELECT * FROM vehiculo";
                    $result = mysqli_query($link, $sql);

                    while ($row = mysqli_fetch_array($result)) {

                        $cod_v = $row['cod_v'];
                        $cod_tipov = $row['cod_tipov'];
                        $precio = $row['precio'];
                        $modelo = $row['modelo'];
                        $capacidad = $row['capacidad'];
                        $marca = $row['marca'];
                        $foto = $row['foto'];
                    ?>

                        <!--PRIMER AUTO-->

                        <div class="tarjeta">
                            <div class="tarjeta__imagen">
                                <img src="<?php echo $foto ?>" width="40%" alt="toyota" class="flotaimg">
                            </div>
                            <div class="tarjeta__descripcion">
                                <h2><?php echo $modelo . " " . $marca ?></h2>
                                <p><b>Codigo:</b> <?php echo $cod_v ?> </p>
                                <p><b>Capacidad maxima:</b> <?php echo $capacidad; ?></p>
                                <p><b>precio*dia:</b> <?php echo $precio ?></p>
                                <button><a class="eliminar" href="../pages/login.html">Remover</a></button>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </section>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/NUEVATIENDA/assets/js/dashboard.js">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/022b0abea9.js" crossorigin="anonymous"></script>
</body>

</html>