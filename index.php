<?php

session_start();

require 'database.php';

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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViajeYa!</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/footerauser.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/general.css">
</head>

<body>

    <?php require 'partials/navbar.php' ?>

    <main class="main">
        <div class="banner">
            <div class="banner__titulo">
                <h1>ALQUILER DE VEHICULOS</h1>
            </div>
        </div>
        <div class="centro">
            <div class="formulario">
                <form action="index.php">
                    <form name="prb" method="post" action="datos.html">
                        <p>Destino</p>
                        <select name="cuidad-destino">
                            <option value="0">Lima</option>
                            <option value="1">Ancash </option>
                            <option value="2">Apurimac </option>
                            <option value="3">Arequipa </option>
                            <option value="4">Ayacucho</option>
                            <option value="5">Cajamarca </option>
                            <option value="6">Callao </option>
                            <option value="7">Cusco </option>
                            <option value="8">Huancavelica </option>
                            <option value="9">Huanuco </option>
                            <option value="10">Ica </option>
                            <option value="11">Junin </option>
                            <option value="12">La Libertad </option>
                            <option value="13">Lambayeque </option>
                            <option value="14">Loreto </option>
                            <option value="15">Madre de Dios </option>
                            <option value="16">Pasco </option>
                            <option value="17">Piura </option>
                            <option value="18">San Martin</option>
                            <option value="19">Tacana</option>
                            <option value="20">Tumbes</option>
                            <option value="21">Ucayali</option>
                        </select>
                        <p>Vehiculo</p>
                        <select name="oficina">
                            <option value="of0">Seleccione por favor</option>
                            <option value="of1">Auto</option>
                            <option value="of2">Bus</option>
                        </select>
                        <p>Recogida</p>
                        <input type="date" name="fecha-recojo">
                        <p>Devolución</p>
                        <input type="date" name="fecha-devolucion">
                        <button class="btn-calcular">CALCULAR PRECIO</button>
                    </form>
            </div>
            <div class="servicio">
                <h2>El mejor servicio de renta de vehiculos en Lima</h2>
                <p>Para llevar a cabo su renta de autos en Lima,
                    <b class="nombre">Viaje ya!</b> le ofrece dos sucursales, una en Lima norte y la segunda en Lima sur, donde se puede disfrutar de numerosos hoteles y restaurantes.</p>
                <h3>Elija el vehiculo que se adapte a sus necesidades</h3>
                <p><b class="nombre">Viaje ya!</b> le propone múltiples opciones, desde la renta de autos económicos hasta sofisticados autos de lujo, pasando por las SUV, los todoterreno, 4x4 y hasta minibuses. Con nosotros, la renta de vehículos es muy
                    simple; pregunte por los servicios con kilometraje ilimitado y seguro incluido, la comodidad al alcance de su mano.</p>

                <h3>Lugares para visitar en Lima</h3>
                <p>Una vez solventado el trámite de la renta de carros en Lima, a disfrutar se ha dicho, puesto que la capital peruana posee muchísimos lugares que visitar. En la zona centro, se encuentran la plaza de Armas, la catedral de Lima, el monasterio
                    de San Francisco, el Palacio Arzobispal de Lima, el Convento de Santo Domingo o incluso la estación de trenes central Andino, denominada de Desamparados, desde donde parten los trenes hacia Huancayo y otros destinos.</p>
                <button class="btn-conocer">Conocenos nuestra historia</button>
            </div>

            <div class="ventajas">
                <div>
                    <p><i class="fas fa-check"></i>No hay costos ocultos</p>
                    <p><i class="fas fa-check"></i>Servicio de atencion al cliente de calidad</p>
                    <p><i class="fas fa-check"></i>La compañia de alquiler vehicular mas grande de Lima</p>
                </div>
                <div>
                    <p><i class="fas fa-check"></i>Sin comision por uso de tarjetas de credito</p>
                    <p><i class="fas fa-check"></i>Vehiculos modernos</p>
                    <p><i class="fas fa-check"></i>Separa tu vehiculo en cualquier momento del dia</p>
                </div>
            </div>
            <div class="mapa">
                <h2>Encuentranos en:</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.973761426582!2d-76.97083108518677!3d-12.113947791422587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c86ff6bd73ed%3A0x10073ceaf2a80fe1!2sPeru%20Rent%20A%20Car%20-%20Alquiler%20de%20Autos%20en%20Lima!5e0!3m2!1ses!2spe!4v1601260104714!5m2!1ses!2spe" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>

    </main>
    <!--FOOTER-->
    <footer>
        <div class="footer-container">
            <div class="columna-izquierda">
                <img src="/NUEVATIENDA/assets/img/logo-empresa.png" alt="Viaje ya!" class="logo">
                <div class="social-media">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <p class="rights-text">© 2020 Empresa de Transporter Viaje ya!</p>
            </div>

            <div class="columna-derecha">
                <h1>Enterate de lo nuevo</h1>
                <div class="borde"></div>
                <p>Ingresa tu correo electronico para enterarte de promociones y novedades.</p>
                <form id="noticia" action="" class="formulario-noticias">
                    <input type="email" class="correo" placeholder="ingresa tu correo" required>
                    <input type="submit" class="footerBtn" value="Enviar">
                </form>
            </div>
        </div>
    </footer>


    <script src="https://kit.fontawesome.com/022b0abea9.js" crossorigin="anonymous"></script>
</body>

</html>