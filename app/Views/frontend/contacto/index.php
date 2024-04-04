<?= $this->extend('frontend/template/main'); ?>
<?= $this->section('content'); ?>

<style>
    .formcontacto {
        background-color: rgb(0, 92, 171);
        color: #fff; /* Color de texto blanco */
    }

    .form {
        background-color: rgb(0, 92, 171);
        padding: 20px;
        border-radius: 0px;
        margin-top: 50px;
    }

    .form-labelc {
        color: #fff; /* Color de etiquetas de formulario blanco */
    }
</style>



<div class="container mt-5 posicion">
    <!-- <img src="<?= base_url('assets/img/mascota/buhabuho.png'); ?>" alt="Contacto" class="floating-image"> -->
    <div class="mb-2 mt-1">
        <p class="lead">La Universidad Pedagógica Nacional (UPN) Unidad 212 Teziutlán se encuentra ubicada en Maxtaco, Teziutlán, Puebla, con el código postal 73820. Para ubicarla en Google Maps, simplemente busca "UPN 212 Teziutlán" o ingresa las coordenadas 19.841678, -97.333222 en la barra de búsqueda de Google Maps para encontrar la ubicación exacta de la institución educativa.</p>
    </div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15014.033570755159!2d-97.3561950097412!3d19.818430521660385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85dae98b61555555%3A0xaaa7fa0941e8cc2b!2sUPN%20Unidad%2021-212!5e0!3m2!1ses-419!2smx!4v1712024978935!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div class="mt-5">
        <p class="lead">Además, si deseas obtener más información sobre los programas académicos, eventos especiales o cualquier otra consulta relacionada con la UPN 212 Teziutlán, te invitamos a que completes nuestro formulario de contacto en línea. Estamos comprometidos a brindarte toda la asistencia que necesites para que puedas dar los siguientes pasos en tu carrera profesional en el ámbito educativo. ¡No dudes en ponerte en contacto con nosotros!</p>
    </div>


    <div class="container form form-labelc formcontacto mt-5 mb-5">
        <h1>Contacto</h1>
        <form action="<?= base_url('contacto/enviar') ?>" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>


</div>







<?= $this->endSection() ?>
