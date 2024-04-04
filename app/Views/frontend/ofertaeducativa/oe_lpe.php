<?= $this->extend('frontend/template/main'); ?>
<?= $this->section('content'); ?>


<div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold text-body-emphasis">Licenciatura en <span
                class="text-primary font-weight-bold">Psicología Educativa</span></h1>
    <div class="col-lg-6 mx-auto text-center">
        <p class="lead mb-4">La Licenciatura es un programa de formación profesional, para aspirantes egresados de Bachillerato y profesionales de la Educación, interesados en el desarrollo humano y los procesos de aprendizaje, se cursa en 4 años, que equivale a 8 semestres, en modalidad escolarizada, tiene 38 asignaturas y un total de 352 créditos. Se imparte de lunes a viernes en horario matutino de 8:00 a 14:00 hrs. La tarea fundamental es la vinculación con el campo laboral y se realizan prácticas en instituciones educativas y partir del sexto semestre, el servicio social, en séptimo y octavo, las prácticas profesionales que se relaciona directamente con los Seminarios de investigación y titulación, asegurando esta última. </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center text-center mb-5">
            <button type="button" class="btn-largo btn-primary btn-lg px-4 me-sm-3 btn-square">Solicitar información</button>
            <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4 btn-square">Secondary</button> -->
        </div>
    </div>
    <div class="overflow-hidden" style="max-height: 50vh;">
        <div class="container px-5">
            <img src="<?= base_url('img/ofertaeducativa/imagen01.jpg') ?>"
                 class="img-fluid border rounded-3 shadow-lg mb-4" alt="Imagen pendiente" width="100%" height="700"
                 loading="lazy">
        </div>
    </div>
</div>


<div class="container mb-5">
    <div class="row">
        <article class="col-md-6">
            <h2 class="text-primary">La licenciatura tiene 3 fases curriculares y 7 líneas:</h2>
            <p class="lead">3 fases curriculares</p>
            <ol type="a" class="lead">
                <li>Fase I. Introducción a la Psicología Educativa y los procesos educativos</li>
                <li>Fase II. La formación en campos profesionales</li>
                <li>Fase III. Formación en campos específicos</li>
            </ol>
            <p class="lead">7 líneas curriculares</p>
            <ol type="a" class="lead">
                <li>Psicopedagógica</li>
                <li>Desarrollo y aprendizaje</li>
                <li>Psicología Social de la Educación</li>
                <li>Socioeducativa</li>
                <li>Educación Inclusiva</li>
                <li>Diseño de programas y materiales educativos</li>
                <li>Metodológica</li>
            </ol>
        </article>

        <article class="col-md-6">
            <h2 class="text-primary">Mapa Curricular</h2>
            <div class="container px-5">
            <img src="<?= base_url('img/ofertaeducativa/mapaCurricular.jpg') ?>"
                 class="img-fluid border rounded-3 shadow-lg mb-4" alt="MapaCurricular" width="100%" height="700"
                 loading="lazy">
        </div>
        </article>
    </div>
</div>


<div class="container mb-5">
    <article class="">
        <h2 class="text-primary">Perfil de egreso</h2>
        <p class="lead">
        El egresado, al término de la formación, contará con:</p>
        <ul class="lead">
            <li>Los conocimientos psicológicos sobre los procesos de desarrollo humano y de aprendizaje, especialmente aquellos derivados de su participación en la educación, en sus distintos niveles, y los relacionados con las prácticas socioculturales, de tal manera que pueda coadyuvar en la construcción de los aprendizajes de los alumnos. </li>
            <li>Los conocimientos para comprender los principales enfoques teóricos y metodologías en los campos psicológico y educativo; así como las capacidades para analizar procesos, variables y resultados derivados de investigaciones de estos campos, que le permitan utilizar estos conocimientos y realizar intervenciones de apoyo educativo de manera sistemática y con resultados efectivos. </li>
            <li>Los conocimientos socioeducativos para comprender las principales políticas y prioridades educativas, así como la organización del sistema educativo del país, de manera que pueda entender y participar en los diversos contextos en que se instrumentan las políticas para dar pertinencia a su formación profesional.</li>
            <li>Los conocimientos teóricos y las herramientas técnicas de la disciplina psicológica, que le permitan diseñar e instrumentar proyectos dirigidos hacia la orientación tutorial 19 y vocacional de los estudiantes, de los distintos niveles educativos, así como diseñar programas de apoyo psicopedagógico para mejorar sus aprendizajes y habilidades cognitivas, fortalecer sus capacidades de estudio autónomo y para aprender a prender. </li>

        </ul>


    </article>
</div>


<div class="container mb-5">
    <article class="">
        <h2 class="text-primary">Campo laboral</h2>
        <p class="lead">
            Como Psicólogo educativo en instituciones de educación pública y privada en niveles de educación inicial, básica, media superior y superior.</p>

        <p class="lead">
            Orientador Educativo en instituciones de educación pública y privada en niveles de educación básica y media superior.</p>

        <p class="lead">
            Asesoría psicopedagógica a padres de familia, maestros e instituciones de educación pública y privada en niveles de educación básica y media superior.</p>

        <p class="lead">
            Orientación y apoyo psicopedagógico a alumnos de educación pública y privada en niveles de educación básica y media superior.</p>

        </p>

    </article>
</div>


<?= $this->endSection(); ?>
