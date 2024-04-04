<link rel="stylesheet" href="<?= base_url('assets/adminlte/css/adminlte.min.css?v=3.2.0'); ?>">

<div class="container">
    <h1>Recuperar contraseña</h1>
    <?php if (session()->getFlashdata('error')): ?>
        <p><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    <div class="mb-4">
        <p class="lead">Para recuperar su contraseña deberá proporcionar la dirección de correo electrónico que utilizó
            para registrarse en el sistema.</p>
    </div>

    <form action="<?= base_url('forgot-password') ?>" method="post">
        <label for="email">Correo electrónico:</label><br>
        <input class="form-control" type="email" id="email" name="email" required><br>
        <button class="btn btn-primary mt-3" type="submit">Enviar</button>
    </form>
</div>
