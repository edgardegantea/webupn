<?= $this->extend('admin/template/main'); ?>

<?= $this->section('content'); ?>

    Nueva publicación


    <div>
        <form action="<?= base_url('admin/publicaciones') ?>" method="post">
            <?= csrf_field(); ?>

            <h5>Información básica de la publicación</h5>


            <div class="form-group">
                <label class="form-label">Tipo:</label>
                <select class="form-control" name="tipo">
                    <option value="Urgente">Urgente</option>
                    <option value="Prioridad media">Prioridad media</option>
                    <option value="Prioridad baja">Prioridad baja</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label" for="">Título:</label>
                <input class="form-control" min="3" max="255" required type="text" name="titulo">
            </div>

            <div class="form-group">
                <label class="form-label" for="">Resumen:</label>
                <textarea class="form-control" name="resumen" id="" cols="30" rows="5"
                          placeholder="Escriba el resumen de la publicación"></textarea>
            </div>

            <div class="form-group">
                <label for="">Contenido de la publicación</label>
                <textarea class="form-control" name="contenido" id="" cols="30" rows="15"></textarea>
            </div>


            <div class="mt-5 mb-5">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-secondary mr-2" data-bs-dismiss="modal"
                            id="guardarBtn">Cancelar
                    </button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>


    </div>

<?= $this->endSection(); ?>