<?php
session_start();
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

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/navbar.css">
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/footerauser.css">
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/general.css">
</head>

<body>
    
<?php require '../partials/navbar.php' ?>
    <div class="container" style="padding-top: 80px;">
        
        <section>
            <table width="100%" align="center">
                <tbody>
                    <tr>
                        <td width="50%"><img src="/NUEVATIENDA/assets/img/flota.jpg" width="100%" height="600px"></td>
                        <td>
                            <table width="100%" cellpadding="50" cellspacing="30">
                                <tr>
                                    <td align="center">
                                        <h1>QUIENES SOMOS</h1><br>
                                        <p align="justify" style="font-family: verdana">¡Tiene un evento y necesita Movilidad para su familia o grupo? Le ofrecemos servicios de transporte privado en general, contamos con unidades y choferes calificados, nuestro servicio esta enfocado al transporte ejecutivo,
                                            tranporte turistico, transporte de personal, para eventos sociales y corportativos, nos caracterizamos por la puntualidad, responsabilidad y compromiso con nuestros clientes para ofrecerle el mejor servicio las
                                            24 horas y 365 dias del año, sin que esto signifique precios altos, cotice y vera que el buen servicio no necesariamente tiene que ser caro.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <h1>MISION</h1><br>
                                        <p align="center" style="font-family: verdana">"Brindar un servicio confiable y que se adecue a las diversas necesidades de los clientes."</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <h1>VISION</h1><br>
                                        <p align="center" style="font-family: verdana">"Ser la empresa de transporte privada más usada por los ciudadanos de Lima."</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <h1>HISTORIA DE LA EMPRESA</h1><br>
                                        <p align="justify" style="font-family: verdana">Empresa X fue creada en el año 2015 brindando un servicio de transporte privado de buses generalmente para paseos de colegios. Con los años se ha ido innovando y comprado autos modernos para brindar un servicio más
                                            variado. Actualmente cuenta con diversos tipos de automóviles como convertibles, deportivos, van, minivans, familiares, furgonetas, camionetas, buses, limosinas, etc. Las cuales se adecuan al pedido de los clientes.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>

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
    <script type="text/javascript">
        let enviar = document.getElementById('noticia');
        enviar.addEventListener('submit', function() {
            alert('Felicitaciones!, pronto recibira nuestras actualizaciones y promociones')
        })
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>