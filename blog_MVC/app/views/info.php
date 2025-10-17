<?php include BASE_PATH . 'layout/header.php'; ?>

<title>Mi Información</title>
<link rel="stylesheet" href="/css/mi-info.css">
<!-- Íconos Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="info-section">
    <h1 class="titulo">Sobre Mí</h1>

    <div class="perfil-card">
        <div class="perfil-img">
            <img src="/images/fotomia.jpg" alt="Foto mia" class="zoomable" id="perfilFoto">
        </div>
        <div class="perfil-info">
            <h2>Waldir Vasquez Rosa</h2>
            <p><strong>Edad:</strong> 24 años</p>
            <p><strong>Carrera:</strong> Ingeniería de Sistemas Informáticos</p>
            <p><strong>Año:</strong> 2025</p>
            <p class="descripcion">
                Soy estudiante apasionado por la tecnología, el desarrollo web. <br>
                Me gusta la parte del diseño y hacer que todo se vea dinamico y bonito.<br>
                Me gusta la parte de Google Cloud ya que cuento con dos certificaciones en esta área avaladas por Google. <br>
                Y me gusta ver y leer informacion acerca de nuevas tecnologias que van saliendo en el mercado. <br>
                Y sobre todo me gusta trabajar en equipo y aportar un poco de lo que se para asi hacer un buen trabajo.<br>
                A la vez me gusta saber reconocer mis errores y aprender de ellos.<br>
                Mis pasatiempos incluyen jugar videojuegos, ver series y películas, y pasar tiempo con amigos y familiares.
            </p>
        </div>
    </div>
</section>

<section class="contact-card">
    <h2>Información para Contactarme</h2>
    <div class="contact-container">
        <div class="contact-box">
            <i class="fa-solid fa-location-dot"></i>
            <div class="contact-text">
                <h3>Dirección</h3>
                <p>Caserio Los Vasquez, Canton Lajitas Arriba, Chilanga Morazan, El Salvador</p>
            </div>
        </div>
        <div class="contact-box">
            <i class="fa-solid fa-phone"></i>
            <div class="contact-text">
                <h3>Teléfono</h3>
                <p>+503 7522-7231</p>
            </div>
        </div>
    </div>
</section>

<section class="galeria-section">
    <h2>Galería de Momentos en la SDS2025</h2>
    <div class="galeria">
        <img src="https://res.cloudinary.com/dqubpavb8/image/upload/v1760658719/yo_yurf3z.jpg" alt="" class="zoomable">
        <img src="https://res.cloudinary.com/dqubpavb8/image/upload/v1760677584/fotomia3_n6zalf.jpg" alt="" class="zoomable">
        <img src="https://res.cloudinary.com/dqubpavb8/image/upload/v1760677602/fotomia1_iojrvg.jpg" alt="Semana de Sistemas" class="zoomable">
        <img src="/img/galeria4.jpg" alt="" class="zoomable">
        <img src="/img/galeria5.jpg" alt="" class="zoomable">
    </div>
</section>

<!-- Lightbox para ampliar imágenes -->
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Vista ampliada de imagen">
    <button class="lightbox-close" id="lightboxClose" aria-label="Cerrar">Cerrar ✕</button>
    <div class="lightbox-content">
        <img id="lightboxImg" alt="Imagen ampliada">
    </div>
</div>

<div class="actions" data-anim>
    <a href="/" class="btn" aria-label="Regresar al inicio">Regresar al inicio</a>
</div>

<?php include BASE_PATH . 'layout/footer.php'; ?>

<script src="js/mi-info.js"></script>