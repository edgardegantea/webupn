<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?= base_url('assets/js/color-modes.js'); ?>"></script>

    <meta charset="utf-8">

    <title>UPN212 Teziutlán</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="<?= base_url('assets/img/logos/logoblanco.png') ?>">
    <meta name="theme-color" content="#712cf9">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 500px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }

        .btn {
            border-radius: 0 !important;
            width: 220px;
            height: 50px;
            text-align: center;
            line-height: 30px; /* Ajusta según el alto del botón */
        }

        input, textarea {
            border-radius: 0 !important;
        }

        /*nav {
            height: 100px !important;
        }*/

        /*
        .navbar-nav .nav-link.active {

            background-color: white;
        }
        */


        .navbar-custom {
            /* height: 100px; */
            background-color: rgb(0, 92, 171);

        }


        .btn-toggle {
            border-radius: 10px !important;
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 30px; /* Ajusta según el alto del botón */
            box-shadow: #0a0e14;
        }

        .footer {
            background-color: #ddd;
            height: 150px;
            padding-top: 20px;
            width: 100%;
        }


        #boton-regresar-arriba {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 80px;
            height: 50px;
            width: 50px;
            z-index: 9999;
            border: none;
            background-color: rgb(0, 92, 171);
            border-radius: 10px;
        }


        .btn-largo {
            border: none;
            border-radius: 0 !important;
            width: 300px;
            height: 50px;
            text-align: center;
            line-height: 30px; /* Ajusta según el alto del botón */
            background-color: rgb(0, 92, 171);
            color: white;
        }


        .texto {
            color: rgb(0, 92, 171);
        }

        .btn {
            background-color: rgb(0, 92, 171);
        }

        .contenedor-imagen {
            position: fixed;
            bottom: 20px;
            right: 180px;
            z-index: 999;
            transition: transform 0.3s ease;
            opacity: 0;
        }

        .contenedor-imagen:hover {
            transform: translateX(-10px) translateY(-10px); /* Mueve ligeramente la imagen cuando el cursor está sobre ella */
        }

        .contenedor-imagen img {
            width: 200px;
            height: auto;
            border-radius: 0px;
            border: none;
        }

        html, body {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: < weight >;
            font-style: normal;
        }

        p {
            text-align: justify;
        }


        .floating-image {
            position: absolute; /* Posición absoluta para que la imagen flote */
            top: 50%; /* Posición vertical centrada */
            right: 0px; /* Ajustar posición horizontal */
            transform: translateY(-50%); /* Centrar verticalmente */
            width: 200px;
        }


    </style>


    <link href="<?= base_url('assets/css/carousel.css'); ?>" rel="stylesheet">
</head>
<body>


<?= $this->include('./frontend/template/header'); ?>


<main>

    <div class="">
        <?= $this->renderSection('content') ?>
    </div>


    <div class="contenedor-imagen">
        <a href="<?= base_url('ofertaeducativa') ?>">
            <img src="<?= base_url('assets/img/mascota/buhabuho.png') ?>" alt="Mascotas">
        </a>
    </div>


    <button id="boton-regresar-arriba"><i class="fas fa-arrow-up text-light border-0"></i></button>


    <!-- FOOTER -->
    <footer class="container-fluid footer">
        <div class="row">
            <div class="col-md-4">
                <p>Developed by edegantea for UPN212-Teziutlán. <?= date('Y') ?>.</p>
            </div>

            <div class="col-md-4 d-flex justify-content-center">
                <a class="me-5" href="https://www.facebook.com/upn212teziutlan" target="_blank"><i
                            class="fa-brands fa-facebook fa-3x"></i></a>
                <a href="" class="me-5"><i class="fa-brands fa-youtube fa-3x text-danger"></i></a>
            </div>
        </div>
    </footer>
</main>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

<script>
    // Obtener la URL actual
    var currentUrl = window.location.href;

    // Obtener todos los enlaces del menú
    var navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    // Iterar sobre cada enlace
    navLinks.forEach(function (navLink) {
        // Comparar la URL actual con el enlace del menú
        if (navLink.href === currentUrl) {
            // Agregar la clase 'active' al enlace seleccionado
            navLink.classList.add('active');
        }
    });
</script>


<script>
    window.onscroll = function () {
        mostrarBoton()
    };

    function mostrarBoton() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("boton-regresar-arriba").style.display = "block";
        } else {
            document.getElementById("boton-regresar-arriba").style.display = "none";
        }
    }

    // Smooth scroll al hacer clic en el botón
    document.getElementById("boton-regresar-arriba").addEventListener("click", function () {
        window.scrollTo({top: 0, behavior: 'smooth'});
    });

</script>


<script>
    let timer;

    document.addEventListener('mousemove', () => {
        clearTimeout(timer);
        mostrarImagen();
    });

    document.addEventListener('keydown', () => {
        clearTimeout(timer);
        mostrarImagen();
    });

    function mostrarImagen() {
        document.getElementById('contenedor-imagen').style.opacity = 1;
        timer = setTimeout(() => {
            document.getElementById('contenedor-imagen').style.opacity = 0;
        }, 3000);
    }
</script>

</body>
</html>
