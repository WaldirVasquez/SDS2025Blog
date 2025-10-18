<?php include BASE_PATH . 'layout/header.php'; ?>


<link rel="stylesheet" href="/css/dias.css">


<!-- efecto de carga -->
<div id="loader" aria-label="Cargando SDS25">
    <div class="loader-inner">
        <div class="logo-sds" aria-hidden="true">
            <span>S</span><span>D</span><span>S</span><span>2</span><span>5</span>
        </div>
        <div class="loader-bar"></div>
    </div>
</div>

<!-- título principal -->
<div class="titulo-dia1">
    <h1 class="titulo-led">DIA 3 TORNEO DE FUTBOL 11 SUSPENDIDO</h1>
    <p class="subtitulo-led">Miercoles 16 de octubre de 2025</p>
</div>

<main class="wrapper">
    <!-- Torneo  -->
    <section class="section-card" data-anim>
        <h2 class="section-title">7:00 AM · Torneo de futbol</h2>
        <div class="meta">Cancha atras de biblioteca</div>
        <p class="desc">El esperado <strong>Torneo de Fútbol 11</strong> de la Semana de Sistemas 2025 estaba programado
            para celebrarse durante el dia miercoles de 7:00 AM en adelante, como una actividad recreativa
            que reuniría a estudiantes, docentes en un ambiente de sana competencia y compañerismo. <br>
            Sin embargo, debido a las fuertes lluvias y la suspensión oficial de clases, el evento fue
            <strong>SUSPENDIDO</strong> para garantizar la seguridad de todos los asistentes<br>
            Para ver las fotos completas con clic en ellas se mostraran <strong>#SDS25</strong>.
        </p>
        <div class="grid grid--5" style="margin-top:16px">
            <figure class="card"
                data-full="https://res.cloudinary.com/dqubpavb8/image/upload/v1760757663/TORNEO_SUSPENDIDO_rwfbec.jpg">
                <img src="https://res.cloudinary.com/dqubpavb8/image/upload/v1760757663/TORNEO_SUSPENDIDO_rwfbec.jpg"
                    alt="Torneo SUSPENDIDO – Foto 1" loading="lazy">
                <figcaption class="overlay">Feria de logros SDS2025</figcaption>
            </figure>
        </div>
    </section>

    <div class="actions" data-anim>
    <a href="/" class="btn" aria-label="Regresar al inicio">Regresar al inicio</a>
    </div>


</main>

<!-- Lightbox para ampliar fotos -->
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Vista ampliada de imagen">
    <button class="lightbox-close" id="lightboxClose" aria-label="Cerrar">Cerrar ✕</button>
    <div class="lightbox-content"><img id="lightboxImg" alt="Imagen ampliada"></div>
</div>

<div class="halo h2"></div>

<?php include BASE_PATH . 'layout/footer.php'; ?>
<script src="js/dias.js"></script>