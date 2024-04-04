<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn-toggle btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
            id="bd-theme"
            type="button"
            aria-expanded="false"
            data-bs-toggle="dropdown"
            aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
            <use href="#circle-half"></use>
        </svg>
        <span class="visually-hidden" id="bd-theme-text">Cambiar tema</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                <svg class="bi me-2 opacity-50" width="1em" height="1em">
                    <use href="#sun-fill"></use>
                </svg>
                Claro
                <svg class="bi ms-auto d-none" width="1em" height="1em">
                    <use href="#check2"></use>
                </svg>
            </button>
        </li>
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                <svg class="bi me-2 opacity-50" width="1em" height="1em">
                    <use href="#moon-stars-fill"></use>
                </svg>
                Oscuro
                <svg class="bi ms-auto d-none" width="1em" height="1em">
                    <use href="#check2"></use>
                </svg>
            </button>
        </li>
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                <svg class="bi me-2 opacity-50" width="1em" height="1em">
                    <use href="#circle-half"></use>
                </svg>
                Auto
                <svg class="bi ms-auto d-none" width="1em" height="1em">
                    <use href="#check2"></use>
                </svg>
            </button>
        </li>
    </ul>
</div>

<header data-bs-theme="dark">

    <!--
    <nav class="navbar navbar-custom navbar-expand-md navbar-dark fixed-top bg-dark">
    -->

    <nav class="navbar navbar-custom navbar-expand-md fixed-top">
        <div class="container bg-navy">
            <a class="navbar-brand" href="<?php echo base_url('/') ?>">
                <img src="<?php echo base_url('assets/img/logos/logoblanco.png'); ?>" height="70" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                </ul>
                <div class="d-flex">

                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url('/'); ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url('publicaciones'); ?>">COMUNIDAD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url('ofertaeducativa'); ?>">OFERTA EDUCATIVA</a>
                        </li>

                        <!--
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= base_url('ofertaeducativa') ?>" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                Oferta Educativa
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?= base_url('ofertaeducativa') ?>">Oferta Educativa</a></li>
                                <li><a class="dropdown-item" href="#">Licenciaturas</a></li>
                                <li><a class="dropdown-item" href="#">Maestrías</a></li>
                            </ul>
                        </li>
                        -->


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                ACCESOS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item justify-content-lg-start" target="_blank" href="#">Plataforma
                                        educativa</a></li>
                                <li><a class="dropdown-item" target="_blank" href="https://evaldoc.upn212tez.info">Sistema
                                        de Evaluación Docente</a></li>
                                <li><a class="dropdown-item" target="_blank" href="https://horarios.upn212tez.info">Sistema
                                        de Asignación de Horarios Docentes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url('contacto'); ?>">CONTACTO</a>
                        </li>
                    </ul>
                    <!--
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                -->
                </div>
            </div>
    </nav>


    <!--
    <nav class="navbar navbar-custom navbar-expand-md fixed-top bg-navy">
        <div class="container-fluid" style="background-color: navy;">
            <a class="navbar-brand" href="<?php echo base_url('/') ?>">
                <img src="<?php echo base_url('assets/img/logos/logoblanco.png'); ?>" height="70" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                </ul>
                <div class="d-flex">

                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url('ofertaeducativa') ?>">Oferta Educativa</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Nosotros</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Admisión</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">Comunidad</a>
                            <ul class="dropdown-menu">

                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">Convocatorias</a>
                            <ul class="dropdown-menu">
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">Investigación</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" target="_blank"
                                       href="https://encuestas.upn212tez.info">Encuestas</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">Accesos</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" target="_blank"
                                       href="https://campus-virtual.upn212teziutlan.edu.mx/">Plataforma
                                        Educativa</a></li>
                                <li><a class="dropdown-item" target="_blank"
                                       href="https://evaldoc.upn212tez.info">Evaluación Docente</a></li>
                                <li><a class="dropdown-item" target="_blank"
                                       href="https://horarios.upn212tez.info">Horarios Docentes</a></li>
                            </ul>
                        </li>


                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar..."
                                   aria-label="Buscar">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>

                    </ul>

                </div>
            </div>


        </div>
    </nav>
    -->

</header>


