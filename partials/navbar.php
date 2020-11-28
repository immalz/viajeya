<?php


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
</head>

<body>
    <nav>
        <a href="/NUEVATIENDA" class="logo">
            <img src="/NUEVATIENDA/assets/img/logo-empresa.png" alt="Viaje ya!">
        </a>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
        <ul>

            <li><a href="/NUEVATIENDA">Inicio</a></li>
            <li><a href="/NUEVATIENDA/pages/nosotros.php">Nosotros</a></li>
            <li><a href="/NUEVATIENDA/pages/flota.php">Flota</a></li>
            <li><a href="/NUEVATIENDA/pages/reserva.php">Reserva</a></li>
            <?php if (!empty($cliente)) : ?>
                <li class="cliente">
                    <span><?= $cliente['nombre']; ?></span>
                    <div class="cliente__opciones">
                        <a href="/NUEVATIENDA/pages/perfil.php">Perfil</a>
                        <?php if ($cliente['nombre'] == "administrador" ): ?>
                            <a href="/NUEVATIENDA/pagesadmin/paneladmin.php">Ir a consola</a>
                            <?php endif; ?>
                        <a href="/NUEVATIENDA/logout.php">Salir<i class="fas fa-sign-out-alt" style="font-size: 25px;"></i></a>

                        
                    </div>
                </li>

            <?php else : ?>
                <li><a href="/NUEVATIENDA/login.php"></i>Ingresar</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</body>


<script src="https://kit.fontawesome.com/022b0abea9.js" crossorigin="anonymous"></script>

</html>

<!-- <script type="text/javascript">
    let ul = document.querySelector('ul');
    let li = document.querySelectorAll('a');

    li.forEach(el => {
        el.addEventListener('click', function() {
            ul.querySelector('.active').classList.remove('active');

            el.classList.add('active');
        })
    })
</script> -->