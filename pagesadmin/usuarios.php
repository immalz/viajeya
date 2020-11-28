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
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/admin/inicio.css">
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/admin/usuarios.css">
</head>

<body>

    <main class="main">
        <?php require_once "dashboard/sidebar.php" ?>
        <!--CONTENIDO PRINCIPAL-->
        <div class="contenedor">
            <div class="contenedor-lista">
                <h1>USUARIOS ACTIVOS EN LA PLATAFORMA</h1>
                <div class="lista" id="lista">
                    <!-- Persona #1 -->
                    <div class="persona">
                        <div class="foto">
                            <img src="/NUEVATIENDA/assets/img/users/1.png">
                        </div>
                        <div class="nombre">
                            <div>
                                <p class="label">Nombre</p>
                                <p class="dato">Carlos Arturo</p>
                            </div>
                        </div>
                        <div class="edad">
                            <p class="label">RESERVAS</p>
                            <p class="dato">7</p>
                        </div>
                        <div class="correo">
                            <div class="label">Correo</div>
                            <p class="dato">carlos@gmail.com</p>
                        </div>
                        <div class="eliminar">
                            <button class="eliminarPersona">Eliminar</button>
                        </div>
                    </div>

                    <!-- Persona #2 -->
                    <div class="persona">
                        <div class="foto">
                            <img src="/NUEVATIENDA/assets/img/users/2.png">
                        </div>
                        <div class="nombre">
                            <div>
                                <p class="label">Nombre</p>
                                <p class="dato">Alejandro</p>
                            </div>
                        </div>
                        <div class="edad">
                            <p class="label">RESERVAS</p>
                            <p class="dato">3</p>
                        </div>
                        <div class="correo">
                            <div class="label">Correo</div>
                            <p class="dato">alejandro@gmail.com</p>
                        </div>
                        <div class="eliminar">
                            <button class="eliminarPersona">Eliminar</button>
                        </div>
                    </div>

                    <!-- Persona #3 -->
                    <div class="persona">
                        <div class="foto">
                            <img src="/NUEVATIENDA/assets/img/users/3.png">
                        </div>
                        <div class="nombre">
                            <div>
                                <p class="label">Nombre</p>
                                <p class="dato">Stephanie</p>
                            </div>
                        </div>
                        <div class="edad">
                            <p class="label">RESERVAS</p>
                            <p class="dato">4</p>
                        </div>
                        <div class="correo">
                            <div class="label">Correo</div>
                            <p class="dato">stephanie@gmail.com</p>
                        </div>
                        <div class="eliminar">
                            <button class="eliminarPersona">Eliminar</button>
                        </div>
                    </div>

                    <!-- Persona #4 -->
                    <div class="persona">
                        <div class="foto">
                            <img src="/NUEVATIENDA/assets/img/users/4.png">
                        </div>
                        <div class="nombre">
                            <div>
                                <p class="label">Nombre</p>
                                <p class="dato">Michael</p>
                            </div>
                        </div>
                        <div class="edad">
                            <p class="label">RESERVAS</p>
                            <p class="dato">18</p>
                        </div>
                        <div class="correo">
                            <div class="label">Correo</div>
                            <p class="dato">micks@gmail.com</p>
                        </div>
                        <div class="eliminar">
                            <button class="eliminarPersona">Eliminar</button>
                        </div>
                    </div>

                    <!-- Persona #5 -->
                    <div class="persona">
                        <div class="foto">
                            <img src="/NUEVATIENDA/assets/img/users/5.png">
                        </div>
                        <div class="nombre">
                            <div>
                                <p class="label">Nombre</p>
                                <p class="dato">Monica</p>
                            </div>
                        </div>
                        <div class="edad">
                            <p class="label">RESERVAS</p>
                            <p class="dato">13</p>
                        </div>
                        <div class="correo">
                            <div class="label">Correo</div>
                            <p class="dato">ada2@gmail.com</p>
                        </div>
                        <div class="eliminar">
                            <button class="eliminarPersona">Eliminar</button>
                        </div>
                    </div>

                    <!-- Persona #6 -->
                    <div class="persona">
                        <div class="foto">
                            <img src="/NUEVATIENDA/assets/img/users/6.png">
                        </div>
                        <div class="nombre">
                            <div>
                                <p class="label">Nombre</p>
                                <p class="dato">Mike</p>
                            </div>
                        </div>
                        <div class="edad">
                            <p class="label">RESERVAS</p>
                            <p class="dato">18</p>
                        </div>
                        <div class="correo">
                            <div class="label">Correo</div>
                            <p class="dato">mike@gmail.com</p>
                        </div>
                        <div class="eliminar">
                            <button class="eliminarPersona">Eliminar</button>
                        </div>
                    </div>

                    <!-- Persona #7 -->
                    <div class="persona">
                        <div class="foto">
                            <img src="/NUEVATIENDA/assets/img/users/7.png">
                        </div>
                        <div class="nombre">
                            <div>
                                <p class="label">Nombre</p>
                                <p class="dato">Alvaro</p>
                            </div>
                        </div>
                        <div class="edad">
                            <p class="label">RESERVAS</p>
                            <p class="dato">5</p>
                        </div>
                        <div class="correo">
                            <div class="label">Correo</div>
                            <p class="dato">alzas@gmail.com</p>
                        </div>
                        <div class="eliminar">
                            <button class="eliminarPersona">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
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