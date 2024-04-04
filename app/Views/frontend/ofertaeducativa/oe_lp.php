<?= $this->extend('frontend/template/main'); ?>
<?= $this->section('content'); ?>


<div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold text-body-emphasis">Licenciatura en <span
                class="text-primary font-weight-bold">Pedagogía</span></h1>
    <div class="col-lg-6 mx-auto text-center">
        <p class="lead mb-4">XXX</p>
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
            <h2 class="text-primary">¿Cuál es el objetivo de la licenciatura en Administración Educativa?</h2>
            <p class="lead">Formar profesionales capaces de analizar la problemática educativa y de intervenir de manera creativa en la resolución de la misma mediante el dominio de las políticas, la organización y los programas del sistema educativo mexicano, del conocimiento de las bases teórico-metodológicas de la pedagogía, de sus instrumentos y procedimientos técnicos.</p>
            <ol type="a" class="lead">
                
            </ol>
        </article>

        <article class="">
        <h2 class="text-primary">Perfil de ingreso</h2>
        <p class="lead">
        Las y los aspirantes deberán poseer:</p>
        <ul class="lead">
            <li>Formación académica general, de preferencia en las áreas de las Humanidades o de las Ciencias Sociales en el bachillerato.
            </li>
            <li>Capacidad para expresar e interpretar conocimientos, ideas y sentimientos, en forma oral y por escrito.
            </li>
            <li>Habilidades propias de un pensamiento reflexivo y crítico, que planifica y realiza procesos ejecutivos de observación, análisis,  síntesis y evaluación.</li>
            <li>Habilidades en el manejo de las tecnologías de la información y la comunicación.</li>

        </ul>


    </article>
    </div>
</div>


<div class="container mb-5">
    <article class="">
        <h2 class="text-primary">Perfil de egreso</h2>
        <p class="lead">
        Al concluir sus estudios el pedagogo podrá:</p>
        <ul class="lead">
            <li>Explicar la problemática educativa de nuestro país con base en el conocimiento de las teorías, los métodos y las técnicas pedagógicas y del Sistema Educativo Nacional.
            </li>
            <li>Construir propuestas educativas innovadoras que respondan a los requerimientos teóricos y prácticos del sistema educativo, basándose en el trabajo grupal e interdisciplinario.
            </li>
            <li>Realizar una práctica profesional fundada en una concepción plural humanística y crítica de los procesos sociales en general y educativos en particular.
            </li>
            <li>Diseñar, desarrollar y evaluar programas educativos con base en el análisis del sistema educativo mexicano y el dominio de las concepciones pedagógicas actuales.
            </li>

        </ul>


    </article>
</div>


<div class="container mb-5">
    <article class="">
        <h2 class="text-primary">Campo laboral</h2>
        <p class="lead">
        Instituciones educativas de los sectores público y privado</p>

        <p class="lead">
        Instituciones sociales como hospitales, asociaciones civiles, organismos gubernamentales</p>

        <p class="lead">Medios de comunicación social</p>

        <p class="lead">Centros de investigación educativa</p>
        
        <p class="lead">Empresas públicas</p>
        

        </p>

    </article>
</div>


<?= $this->endSection(); ?>
