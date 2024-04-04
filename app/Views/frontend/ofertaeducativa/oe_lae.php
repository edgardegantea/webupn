<?= $this->extend('frontend/template/main'); ?>
<?= $this->section('content'); ?>


<div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold text-body-emphasis">Licenciatura en <span
                class="text-primary font-weight-bold">Administración Educativa</span></h1>
    <div class="col-lg-6 mx-auto text-center">
        <p class="lead mb-4">El egresado de la Licenciatura en Administración Educativa podrá desarrollar actividades
            profesionales en las distintas instituciones de educación básica, media superior y superior, así como en
            dependencias y organizaciones del sector público y privado responsables de asesorar la toma de decisiones,
            evaluar políticas educativas y diseñar e instrumentar proyectos de intervención en la administración y
            gestión educativa.</p>

    </div>
    <div class="overflow-hidden" style="max-height: 50vh;">
        <div class="container px-5">
            <img src="<?= base_url('img/ofertaeducativa/imagen01.jpg') ?>"
                 class="img-fluid border rounded-3 shadow-lg mb-4" alt="Imagen pendiente" width="100%" height="700"
                 loading="lazy">
        </div>
    </div>
    <div class="text-center mt-3 mb-5">

        <a href="https://wa.me/+522311334161?text=¡Hola! Estoy interesado(a) en obtener más información de la Licenciatura en Administración Educativa." target="_blank">
            <button class="btn-largo btn-primary btn-lg px-4 me-sm-3" type="button">
                <i class="fab fa-whatsapp fa-xl"></i> CONTACTAR
            </button>
        </a>
    </div>
</div>


<div class="container mb-5">
    <div class="row">
        <article class="col-md-6">
            <h2 class="text-primary">¿Cuál es el objetivo de la licenciatura en Administración Educativa?</h2>
            <p class="lead">Forma a un profesional de la educación en tres ámbitos de formación:</p>
            <ol type="a" class="lead">
                <li>Educativo (filosofía y teoría)</li>
                <li>Sistema Educativo Nacional (constitución y desarrollo)</li>
                <li>Política Educativa (cursos de acción conformados por programas y proyectos orientados a atender
                    necesidades y resolver problemas educativos)
                </li>
            </ol>
        </article>

        <article class="col-md-6">
            <h2 class="text-primary">¿Cuáles son las competencias de un administrador educativo?</h2>
            <p class="lead">A lo largo de su formación el egresado desarrolla competencias y habilidades personales y profesionales
                en aspectos como: autoconocimiento, comunicación, gestión del tiempo, trabajo en equipo, manejo de
                conflictos, autodidactismo, liderazgo, creatividad, así como conocimiento y manejo de TIC, entre otros
                aspectos. A través de su mapa curricular que se compone de tres fases de formación: inicial,
                profundización e integración, así como sus líneas de curriculares: Histórica-filosófica-educativa,
                Política educativa, Gobierno de los sistemas educativos, Metodológica, Matemáticas, sistemas de
                información y tecnologías.</p>
        </article>
    </div>
</div>


<div class="container mb-5">
    <article class="">
        <h2 class="text-primary">Perfil de egreso</h2>
        <p class="lead">
            El profesional de la educación en el campo de la administración y la gestión educativa egresado de la UPN
            será capaz de:</p>
        <ul class="lead">
            <li>Conocer, analizar, interpretar e intervenir en las instituciones, organizaciones y en las prácticas
                educativas</li>
            <li>Identificar el contexto, las condiciones y los factores que han dado pie al diseño, implementación,
                seguimiento y evaluación de políticas educativas</li>
            <li>Proponer estrategias para hacer más eficiente la gestión en el sistema educativo.</li>

        </ul>


    </article>
</div>


<div class="container mb-5">
    <article class="">
        <h2 class="text-primary">Campo laboral</h2>
        <p class="lead">
            El egresado de la Licenciatura en Administración Educativa podrá desarrollar actividades profesionales en
            las distintas instituciones de educación básica, media superior y superior, así como en dependencias y
            organizaciones del sector público y privado responsables de asesorar la toma de decisiones, evaluar
            políticas educativas y diseñar e instrumentar proyectos de intervención en la administración y gestión
            educativa.
        </p>

    </article>
</div>


<?= $this->endSection(); ?>
