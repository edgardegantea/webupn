<?= $this->extend('admin/template/main'); ?>

<?= $this->section('content'); ?>

    <h1>Admin - Carousel</h1>

    <a href="/admin/carousel/create">Subir Nueva Imagen</a>

    <table class="table">
        <thead>
        <tr>
            <th>Imagen</th>
            <th>Autor</th>
            <th>Título</th>
            <th>Resumen</th>
            <th>Contenido</th>
            <th>Estado</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($images as $image): ?>
            <tr>
                <td>
                    <a href="<?= base_url('writable/uploads/' . $image['filename']); ?>" target="_blank">
                        <img src="<?= base_url('uploads/' . $image['filename']); ?>" alt="<?= $image['filename']; ?>" style="width: 100px;">
                    </a>
                </td>
                <td><?= $image['autor']; ?></td>
                <td><?= $image['titulo']; ?></td>
                <td><?= $image['resumen']; ?></td>
                <td><?= $image['contenido']; ?></td>
                <td><?= $image['estado']; ?></td>
                <td><?= $image['tipo']; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Acciones">
                        <a href="/admin/carousel/edit/<?= $image['id']; ?>" class="btn btn-primary">Editar</a>
                        <button type="button" class="btn btn-danger" onclick="confirmDelete(<?= $image['id']; ?>)">Eliminar</button>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


    <script>
        function confirmDelete(id) {
            if (confirm("¿Estás seguro de que deseas eliminar este elemento?")) {
                window.location.href = "/admin/carousel/delete/" + id;
            }
        }
    </script>


<?= $this->endSection(); ?>