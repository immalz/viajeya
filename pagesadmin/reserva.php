<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/navbar.css">
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/footer.css">
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/general.css">
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/admin/reserva.css">
</head>
<body>
<?php require '../partials/navbarAdmin.php' ?>
<div class="espacio"></div>
<h1>CONTROL DE RESEVA</h1>
    <div class="container">
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



 <!--FOOTER-->
 <footer>
        <div class="footer-container">
        <img src="/NUEVATIENDA/assets/img/logo-empresa.png" alt="Viaje ya!" class="logo">
            <div class="social-media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="rights-text">© 2020 Empresa de Transporter Viaje ya!</p>
        </div>
    </footer>

<script src="https://kit.fontawesome.com/022b0abea9.js" crossorigin="anonymous"></script>
</body>
</html>