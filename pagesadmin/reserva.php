
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
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/admin/reserva.css">
</head>

<body>

    <main class="main">
        <?php require_once "dashboard/sidebar.php" ?>


        
    <div class="container">
    <h1>CONTROL DE RESEVA</h1>
        <!--SECCION PRINCIPAL-->

        <section class="filtrar-reserva">
            <h2>Filtrar Reserva</h2>
            <form method="post" id="formulario">
                <img src="/NUEVATIENDA/assets/img/logo-empresa.png" alt="viaje ya!">
                <p>Filtrar por:</p>
                        <select name="cbcliente">
                                <option value="">Codigo Cliente</option>
                                <?php

                                $cliente1 = "SELECT * FROM cliente";
                                $cliente2 = mysqli_query($conexion,$cliente1);

                                while ($row = mysqli_fetch_array($cliente2))
                                {
                                    $cod_clien = $row['cod_clien'];
                                    $cod = $row['cod'];
                                    $nom = $row['nom'];
                                    $correo = $row['correo'];
                                    $numcel = $row['numcel'];
                                    $dni = $row['dni'];
                                 ?>

                                <option value="<?php echo $cod_clien ?>"><?php echo $nom ?></option>

                                <?php 
                                    } 
                                ?>
                        </select>
                        <select name="cbvehiculo">

                                <option value="">Codigo vehiculo</option>

                                <?php

                                $vehiculo1 = "SELECT * FROM vehiculo";
                                $vehiculo2 = mysqli_query($conexion,$vehiculo1);


                                while ($row2 = mysqli_fetch_array($vehiculo2))
                                {
                                    $cod_v = $row2['cod_v'];
                                    $cod_tipov = $row2['cod_tipov'];
                                    $precio = $row2['precio'];
                                    $modelo = $row2['modelo'];
                                    $capacidad = $row2['capacidad'];
                                    $marca = $row2['marca'];
                                    $foto = $row2['foto'];
                                 ?>

                                <option value="<?php echo $cod_v ?>"><?php echo $modelo." ".$marca ?></option>

                                <?php 
                                    } 
                                ?>
                        </select>
                <button name="btnfiltrar" type="submit">FILTRAR</button>
            </form>
        </section>
        
        <section class="principal">
            <div class="reserva" id="reserva">

                <?php
                $sql = "SELECT * FROM pedido ".$where."";
                $result = mysqli_query($conexion,$sql);

                while($mostrar = mysqli_fetch_array($result)){
                  ?>

                <!--PRIMER AUTO-->

                <div class="tarjeta">
                    <div class="tarjeta__descripcion">
                        <p><b>Codigo Cliente: </b><?php echo $mostrar['cod_clien'] ?></p>
                        <p><b>Codigo Vehiculo: </b><?php echo $mostrar['cod_v'] ?></p>
                        <p><b>Fecha Recojo: </b><?php echo $mostrar['fecha_inicio'] ?></p>
                        <p><b>Fecha Entrega: </b><?php echo $mostrar['fecha_fin'] ?></p>
                        <p><b>Estado Reserva: </b><?php echo $mostrar['est_pedido'] ?></p>
                        <p><b>Estado Pago: </b><?php echo $mostrar['est_pago'] ?></p>
                        <button><a class="eliminar"href="../pages/login.html">CANCELAR</a></button>
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