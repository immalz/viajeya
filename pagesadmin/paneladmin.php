
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/navbar.css">
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/footer.css">
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/general.css">
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/admin/inicio.css">
</head>
<body>
<?php require '../partials/navbarAdmin.php' ?>

<main class="main">
        <div class="contenido">
            <div class="contenido__imagen">
                <img loading="lazy" src="/NUEVATIENDA/assets/img/administre.png">
            </div>
            <div class="contentido__texto">
                <h1>Bienvenido al modo de administracion</h1>
                <br>
                <p>En este espacio tendra acceso a las opciones del administrador.</p>
                <p>Podra activar y desactivar la barra de navegacion segun sea lo que va a realizar.</p>
                <br>
                <p>ACCESO TOTAL A LAS FUNCIONES DE LA EMPRESA</p>
                <br>
                <p>
                    <button class="btn-activar"><a href="/NUEVATIENDA/pagesadmin/reserva.php">VER RESERVAS</a></button>
                </p>
                <br>
                <h2>Salir a la pagina en modo visitante</h2>
                <br>
                <p> Revise las reservaciones y fechas programadas de eventos importantes</p>
                <br>
                <p>
                    <button class="btn-activar"><a id="salir" href="/NUEVATIENDA">VER COMO CLIENTE</a></button>
                </p>
            </div>
        </div>
    </main>




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