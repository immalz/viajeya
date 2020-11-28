
<nav>
        <a href="/NUEVATIENDA" class="logo">
            <img src="/NUEVATIENDA/assets/img/logo-empresa.png" alt="Viaje ya!">
        </a>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
        <ul>
            <li><a href="/NUEVATIENDA" >Inicio</a></li>
            <li><a href="/NUEVATIENDA/pages/nosotros.php" >Nosotros</a></li>
            <li><a href="/NUEVATIENDA/pages/flota.php" >Flota</a></li>
            <li><a href="/NUEVATIENDA/pages/reserva.php" >Reserva</a></li>
            <li><a href="/NUEVATIENDA/login.php" >Ingresar</a></li>
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