<?php include BASE_PATH . 'layout/header.php'; ?>

<!-- CSS y JS específicos de este día -->
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
  <h1 class="titulo-led">DIA 4</h1>
  <p class="subtitulo-led">Jueves 17 de octubre de 2025</p>
</div>

<main class="wrapper">
  <!-- INAUGURACIÓN -->
  <section class="section-card" data-anim>
    <h2 class="section-title">9:00 AM · Feria de Logros</h2>
    <div class="meta">Plaza Minerva</div>
    <p class="desc">En la Feria de Logros – SDS 2025 se presentaron los proyectos más destacados desarrollados por estudiantes desde primer hasta quinto año, demostrando la evolución de sus habilidades técnicas y creativas. <strong>#SDS25</strong>.</p>
    <div class="grid grid--5" style="margin-top:16px">
      <figure class="card" data-full=""><img src="/images/dia1/ina_1.jpg" alt="Inauguración – Foto 1" loading="lazy"><figcaption class="overlay">feria de logros</figcaption></figure>
      <figure class="card" data-full="/images/dia1/ina_2.jpg"><img src="/images/dia1/ina_2.jpg" alt="Inauguración – Foto 2" loading="lazy"><figcaption class="overlay">feria de logros</figcaption></figure>
      <figure class="card" data-full="/images/dia1/ina_3.jpg"><img src="/images/dia1/ina_3.jpg" alt="Inauguración – Foto 3" loading="lazy"><figcaption class="overlay">feria de logros</figcaption></figure>
      <figure class="card" data-full="/images/dia1/ina_4.jpg"><img src="/images/dia1/ina_4.jpg" alt="Inauguración – Foto 4" loading="lazy"><figcaption class="overlay">feria de logros</figcaption></figure>
      <figure class="card" data-full="/images/dia1/ina_5.jpg"><img src="/images/dia1/ina_5.jpg" alt="Inauguración – Foto 5" loading="lazy"><figcaption class="overlay">feria de logros</figcaption></figure>
    </div>

    <div class="grid grid--2" style="margin-top:16px">
      <div class="video-wrap"><video src="/images/dia1/ina_video_1.mp4" controls playsinline></video></div>
      <div class="video-wrap"><video src="/images/dia1/ina_video_2.mp4" controls playsinline></video></div>
    </div>
  </section>

  <!-- Comelos de pupusas-->
  <section class="section-card" data-anim>
    <h2 class="section-title">Comelon de Pupusas · 12:00 PM</h2>
    <div class="meta">Frente a Edificio Minerva</div>
    <p class="desc">El Comelón de Pupusas fue una divertida competencia en la que varios estudiantes se enfrentaron para demostrar quién podía comer la mayor cantidad de pupusas.
                    El evento combinó risas, emocion y mucha energía, mientras los participantes competían por el premio al gran premio.</p>
    <div class="grid grid--5" style="margin-top:16px">
      <figure class="card" data-full="/images/dia1/p1_1.jpg"><img src="/images/dia1/p1_1.jpg" alt="Ponencia 1 – Foto 1" loading="lazy"><figcaption class="overlay">Comelon de pupusas</figcaption></figure>
      <figure class="card" data-full="/images/dia1/p1_2.jpg"><img src="/images/dia1/p1_2.jpg" alt="Ponencia 1 – Foto 2" loading="lazy"><figcaption class="overlay">Comelon de pupusas</figcaption></figure>
      <figure class="card" data-full="/images/dia1/p1_3.jpg"><img src="/images/dia1/p1_3.jpg" alt="Ponencia 1 – Foto 3" loading="lazy"><figcaption class="overlay">Comelon de pupusas</figcaption></figure>
      <figure class="card" data-full="/images/dia1/p1_4.jpg"><img src="/images/dia1/p1_4.jpg" alt="Ponencia 1 – Foto 4" loading="lazy"><figcaption class="overlay">Comelon de pupusas</figcaption></figure>
      <figure class="card" data-full="/images/dia1/p1_5.jpg"><img src="/images/dia1/p1_5.jpg" alt="Ponencia 1 – Foto 5" loading="lazy"><figcaption class="overlay">Comelon de pupusas</figcaption></figure>
    </div>

    <div class="grid grid--2" style="margin-top:16px">
      <div class="video-wrap"><video src="/images/dia1/p1_video_1.mp4" controls playsinline></video></div>
      <div class="video-wrap"><video src="/images/dia1/p1_video_2.mp4" controls playsinline></video></div>
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