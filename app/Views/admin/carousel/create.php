<?= $this->extend('admin/template/main'); ?>

<?= $this->section('content'); ?>

<h1>Admin - Subir Imagen</h1>

<form action="/admin/carousel/store" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <input type="file" name="image" accept="image/*">
    </div>

    <div class="form-group">
        <input type="text" name="titulo" placeholder="Título">
    </div>

    <div class="form-group">
        <textarea name="resumen" placeholder="Resumen"></textarea>
    </div>

    <div class="form-group">
        <textarea name="contenido" placeholder="Contenido"></textarea>
    </div>

    <div class="form-group">
        <select name="estado">
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
        </select>
    </div>

    <div class="form-group">
        <select name="tipo">
            <option value="imagen">Imagen</option>
            <option value="video">Video</option>
        </select>
    </div>



    <div class="mt-3">
        <button type="submit">Subir</button>
    </div>


</form>

<?= $this->endSection() ?>