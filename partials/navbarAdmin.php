<nav>
        <a href="/NUEVATIENDA/pagesadmin/paneladmin.php" class="logo">
            <img src="/NUEVATIENDA/assets/img/logo-empresa.png" alt="Viaje ya!">
        </a>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
        <ul>
            <li><a class="active" href="/NUEVATIENDA/pagesadmin/paneladmin.php" >Inicio</a></li>
            <li><a href="/NUEVATIENDA/pagesadmin/flota.php" >Flota</a></li>
            <li><a href="/NUEVATIENDA/pagesadmin/reserva.php" >Reservas</a></li>
            <li><a href="/NUEVATIENDA/pagesadmin/usuarios.php" >Usuarios</a></li>
            <li><a href="/NUEVATIENDA" ><i class="fas fa-sign-out-alt" style="font-size: 25px;"></i></a></li>
        </ul>
</nav>

<script type="text/javascript">
  let ul = document.querySelector('ul');
let li = document.querySelectorAll('a');

li.forEach(el => {
    el.addEventListener('click', function() {
        ul.querySelector('.active').classList.remove('active');

        el.classList.add('active');
    })
})
</script>

