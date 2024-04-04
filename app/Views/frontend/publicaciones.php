<?= $this->extend('frontend/template/main'); ?>

<?= $this->section('content'); ?>


    <div class="container mt-5">
        <div class="row">
        <?php foreach ($publicaciones as $publicacion): ?>

        <div class="card-body mb-5 mr-3">
            <h2 class="text-primary text-justify"><?= $publicacion['titulo'] ?></h2>
            <p class=""><?= $publicacion['resumen'] ?></p>
<!--            <p>--><?php //= $publicacion['contenido'] ?><!--</p>-->
            <a href="#" class="btn btn-primary">Continuar leyendo...</a>
        </div>
        <?php endforeach; ?>
    </div>
    </div>

<?= $this->endSection(); ?>
