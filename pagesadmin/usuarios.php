<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | usuarios</title>
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/navbar.css">
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/footer.css">
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/general.css">
    <link rel="stylesheet" href="/NUEVATIENDA/assets/css/admin/usuarios.css">
</head>
<body>

<?php require '../partials/navbarAdmin.php' ?>
<div class="espacio"></div>
<main>

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
