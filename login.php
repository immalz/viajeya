<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }

require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, nombre, correo, contraseña FROM clientes WHERE correo = :email');

    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && $_POST['password'] == $results['contraseña']) {
        $_SESSION['cliente_id'] = $results['id'];
        header("Location: /NUEVATIENDA");
    } else {
        $message = 'Lo siento, las credenciales no coinciden';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="assets/css/logins.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body>

    <?php require 'partials/navbar.php' ?>
    <?php if (!empty($message)) : ?>
        <p> <?= $message ?></p>
    <?php endif; ?>

    <main>
        <h1>Inicia Sesión</h1>
        <span>o <a href="registro.php">Registrate</a></span>
        <form action="login.php" method="post">
            <input type="text" name="email" placeholder="Ingresa su correo electronico...">
            <input type="password" name="password" placeholder="Ingresa su contraseña...">
            <input type="submit" value="Acceder"></input>
        </form>
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


    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>