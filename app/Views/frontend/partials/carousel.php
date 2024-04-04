<link rel="stylesheet" href="<?php echo base_url('assets/css/carousel.css'); ?>">

<!--
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Example headline.</h1>
                    <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
-->


<style>
    /* Definir una relación de aspecto específica para las imágenes del carousel */
    .carousel-img {
        width: 100%;
        height: 0;
        padding-top: 56.25%; /* Aspect ratio 16:9 */
        overflow: hidden;
        position: relative;
        height: 500px;
    }

    .carousel-img img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover; /* Para asegurar que la imagen se ajuste correctamente en el contenedor */
    }

    /* Estilos para la capa opaca */
    .carousel-caption-opacity {
        background-color: rgba(0, 92, 171, 0.7); /* Ajusta la opacidad aquí */
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 20px;
    }

    /* Estilos para el texto en la capa opaca */
    .carousel-caption h5,
    .carousel-caption p {
        color: #ffffff; /* Color del texto */
    }


    /* Estilos para pantallas pequeñas (teléfonos) */
    @media (max-width: 768px) {
        .carousel-caption-opacity {
            position: static;
            width: auto;
            padding: 0;
            background-color: rgba(0, 92, 171, 0.7);
            text-align: center;
        }

        .carousel-caption h5,
        .carousel-caption p {
            color: #fff; /* Color del texto en pantallas pequeñas */
        }
    }
</style>




<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php foreach ($images as $index => $image): ?>
            <div class="carousel-item <?= ($index === 0) ? 'active' : ''; ?>">
                <div class="carousel-img">
                    <img src="<?= base_url('uploads/' . $image['filename']); ?>" class="d-block" alt="<?= $image['filename']; ?>">

                </div>
                <div class="carousel-caption carousel-caption-opacity d-none d-md-block">
                    <h2 class="text-light"><?= $image['titulo']; ?></h2>
                    <p><?= $image['resumen']; ?></p>
                    <!-- <a href="#" class="btn btn-primary">Botón de Enlace</a> -->
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
