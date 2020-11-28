<?php
    require 'database.php';

    $message = '';

    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['name'])) {
        $sql = "INSERT INTO clientes (nombre, correo, contraseña) VALUES (:name, :email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':name', $_POST['name']);
        $password = $_POST['password'];
        $stmt->bindParam(':password', $password);
    
        if ($stmt->execute()) {
          $message = 'Se ha creado un usuario satisfactoriamente!';
        } else {
          $message = 'Ha ocurrido un error al crear su contraseña';
        }
      }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="assets/css/logins.css">
<link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footerauser.css">
</head>

<body>
    <?php require 'partials/navbar.php' ?>
    <?php if(!empty($message)): ?>
      <p><?=  $message?></p>
    <?php endif; ?>
    <main>
        <h1>Registrate</h1>
        <span>o <a href="login.php">Inicia Sesión</a></span>

        <form action="registro.php" method="post">
            <input type="text" name="name" placeholder="Ingrese un nombre de usuario...">
            <input type="text" name="email" placeholder="Ingrese correo electronico...">
            <input type="password" name="password" placeholder="Ingresar contraseña...">
            <input type="password" name="confirm_password" placeholder="Confirmar contraseña...">
            <input type="submit" value="Registrarse"></input>
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