<?php include BASE_PATH . 'layout/header.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Semana de Sistemas 2025 - SDS25</title>
  <link rel="stylesheet" href="/css/styles.css">

  <script src="js/index.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&display=swap" rel="stylesheet">

</head>

<body>
  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="hero-grid">
        <!-- Left Content -->
        <div class="hero-content">
          <div class="hero-titles">
            <h1 class="main-title">SEMANA DE SISTEMAS 2025</h1>
            <h2 class="sub-title">SDS25</h2>
          </div>

          <p class="hero-description">
            La Semana de Sistemas 2025 es un evento académico y tecnológico diseñado para estudiantes y docentes.
            Durante cinco días intensivos, exploraremos las tendencias más relevantes del sector:
            Inteligencia Artificial, Bitcoin, Laravel y mucho más.
            Con ponencias magistrales, talleres prácticos y muchas actividades mas.
          </p>
        </div>

        <!-- Right Image -->
        <div class="hero-image">
          <div class="image-wrapper">
            <div class="image-gradient"></div>
            <img src="/images/PORTADA.png" alt="Semana de Sistemas">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Descricion del proyecto -->
  <section class="description-section">
    <div class="container">
      <div class="description-card">
        <div class="card-glow"></div>
        <div class="card-content">
          <h2 class="card-title">Descripción del Proyecto</h2>
          <p class="card-text">
            Este poryecto tiene tiene como objetivo la creacion de este blog para seguir mas de cerca La Semana de
            Sistemas 2025.
            Asi como tambien aprender y practicar el patron de diseño MVC (Modelo-Vista-Controlador) utilizando PHP.
            El proyecto incluye funcionalidades como la visualización de itinerarios, detalles de ponencias y
            dicho proyecto esta diseñado para la materia Tecnicas de Programcion para Internet TPI
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Itinerario de la Mañana -->
  <section class="schedule-section">
    <div class="container">
      <div class="schedule-header">
        <h2 class="section-title">Itinerarios</h2>
      </div>
      <div class="cards-grid-horizontal">
        <!-- Card Día 1 -->
        <div class="schedule-card-horizontal">
          <div class="card-header-info">
            <h4 class="day-title">Día 1 Mañana</h4>
            <p class="day-date">Lunes 13 de Octubre, 2025</p>
          </div>
          <div class="card-images">
            <div class="image-box" data-full="/images/PyT/ponencia1.jpg">
              <img src="/images/PyT/ponencia1.jpg" alt="Ponencia 1">
            </div>
            <div class="image-divider"></div>
            <div class="image-box" data-full="/images/PyT/ponencia2.jpg">
              <img src="/images/PyT/ponencia2.jpg" alt="Ponencia 2">
            </div>
          </div>
          <a href="/dia1" class="card-btn">Ir al Día 1</a>

        </div>
        <!-- Card Día 1 -->
        <div class="schedule-card-horizontal">
          <div class="card-header-info">
            <h4 class="day-title">Día 1 Tarde</h4>
            <p class="day-date">Lunes 13 de Octubre, 2025</p>
          </div>
          <div class="card-images">
            <div class="image-box" data-full="/images/tarde/tarde1.jpg">
              <img src="/images/tarde/tarde1.jpg" alt="Ponencia 1">
            </div>
          </div>
          <button class="card-btn">Ir al Día 1 </button>
        </div>
        <!-- Card Día 2 Por la mañana -->
        <div class="schedule-card-horizontal">
          <div class="card-header-info">
            <h4 class="day-title">Día 2 Mañana</h4>
            <p class="day-date">Martes 14 de Octubre, 2025</p>
          </div>
          <div class="card-images">
            <div class="image-box" data-full="/images/PyT/ponenciaDia2.jpg">
              <img src="/images/PyT/ponenciaDia2.jpg" alt="Ponencia 1">
            </div>
            <div class="image-divider"></div>
            <div class="image-box" data-full="/images/PyT/ponencia2Dia2.jpg">
              <img src="/images/PyT/ponencia2Dia2.jpg" alt="Ponencia 2">
            </div>
            <div class="image-divider"></div>
            <div class="image-box" data-full="/images/PyT/ponencia02Dia2.jpg">
              <img src="/images/PyT/ponencia02Dia2.jpg" alt="Ponencia 2">
            </div>
          </div>
          <button class="card-btn">Ir al Día 2</button>
        </div>
        <!-- Card Día 2 Por la tarde -->
        <div class="schedule-card-horizontal">
          <div class="card-header-info">
            <h4 class="day-title">Día 2 Tarde</h4>
            <p class="day-date">Martes 14 de Octubre, 2025</p>
          </div>
          <div class="card-images">
            <div class="image-box" data-full="/images/tarde/tarde2.jpg">
              <img src="/images/tarde/tarde2.jpg" alt="Ponencia 1">
            </div>
          </div>
          <button class="card-btn">Ir al Día 2</button>
        </div>
        <div class="schedule-card-horizontal">
          <div class="card-header-info">
            <h4 class="day-title">Día 3 Mañana</h4>
            <p class="day-date">MIERCOLES 15 de Octubre, 2025</p>
          </div>
          <div class="card-images">
            <div class="image-box" data-full="/images/PyT/MIERCOLES.png">
              <img src="/images/PyT/MIERCOLES.png" alt="Ponencia 1">
            </div>
          </div>
          <button class="card-btn">Ir al Día 2</button>
        </div>
  </section>

  <section class="schedule-section afternoon">
    <div class="container">
      <div class="schedule-header"></div>

      <!-- Card Día 4 (sola y centrada) -->
      <div class="cards-grid-horizontal single-column">
        <div class="schedule-card-horizontal">
          <div class="card-header-info">
            <h4 class="day-title">Día 4</h4>
            <p class="day-date">JUEVES 16 de Octubre, 2025</p>
          </div>
          <div class="card-images">
            <div class="image-box" data-full="/images/PyT/feria.jpg">
              <img src="/images/PyT/feria.jpg" alt="torneo">
            </div>
            <div class="image-divider"></div>
            <div class="image-box" data-full="/images/PyT/PUPUSAS.png">
              <img src="/images/PyT/PUPUSAS.png" alt="Ponencia 2">
            </div>
          </div>
          <a href="/dia4" class="card-btn">Ir al Día 1</a>
        </div>
      </div>

      <!-- Cards Día 5 (dos juntas) -->
      <div class="cards-grid-horizontal double-column">
        <!-- Día 5 Mañana -->
        <div class="schedule-card-horizontal">
          <div class="card-header-info">
            <h4 class="day-title">Día 5 Mañana</h4>
            <p class="day-date">VIERNES 17 de Octubre, 2025</p>
          </div>
          <div class="card-images">
            <div class="image-box" data-full="/images/PyT/bingo.png">
              <img src="/images/PyT/bingo.png" alt="Ponencia 1">
            </div>
            <div class="image-divider"></div>
            <div class="image-box" data-full="/images/PyT/torneo.png">
              <img src="/images/PyT/torneo.png" alt="Ponencia 2">
            </div>
          </div>
          <button class="card-btn">Ir al Día 5</button>
        </div>

        <!-- Día 5 Noche -->
        <div class="schedule-card-horizontal">
          <div class="card-header-info">
            <h4 class="day-title">Día 5 Noche</h4>
            <p class="day-date">VIERNES 17 de Octubre, 2025</p>
          </div>
          <div class="card-images">
            <div class="image-box" data-full="/images/tarde/fiesta.png"">
            <img src=" /images/tarde/fiesta.png" alt="Evento nocturno">
            </div>
          </div>
          <button class="card-btn">Ir al Día 5 (Noche)</button>
        </div>
      </div>
    </div>
  </section>


  <!-- Modal para ver imagen completa -->
  <div class="image-modal" id="imageModal">
    <span class="close-modal">&times;</span>
    <img id="modalImage" src="" alt="">
  </div>


  <!-- patrocinadores-->
  <section class="sponsors-section">
    <div class="container">
      <h2 class="section-title">Patrocinadores</h2>
    </div>
    <div class="carousel-wrapper">
      <div class="carousel">
        <div class="sponsor-card">
          <img src="/images/patrocinadores/MUEVO.jpg" alt="MUEVO">
        </div>
        <div class="sponsor-card">
          <img src="/images/patrocinadores/FRANCESA.png" alt="FRANCESA">
        </div>
        <div class="sponsor-card">
          <img src="/images/patrocinadores/villamotos.png" alt="villamotos">
        </div>
        <div class="sponsor-card">
          <img src="/images/patrocinadores/TECNO.png" alt="TECNO">
        </div>
        <div class="sponsor-card">
          <img src="/images/patrocinadores/SARITA.jpg" alt="SARITA">
        </div>
        <div class="sponsor-card">
          <img src="/images/patrocinadores/OPTICA.jpg" alt="OPTICA">
        </div>


        <!-- Duplicados para bucle infinito -->
        <div class="sponsor-card">
          <img src="/images/patrocinadores/MUEVO.jpg" alt="MUEVO">
        </div>
        <div class="sponsor-card">
          <img src="/images/patrocinadores/FRANCESA.png" alt="FRANCESA">
        </div>
        <div class="sponsor-card">
          <img src="/images/patrocinadores/villamotos.png" alt="villamotos">
        </div>
        <div class="sponsor-card">
          <img src="/images/patrocinadores/TECNO.png" alt="TECNO">
        </div>
        <div class="sponsor-card">
          <img src="/images/patrocinadores/SARITA.jpg" alt="SARITA">
        </div>
        <div class="sponsor-card">
          <img src="/images/patrocinadores/OPTICA.jpg" alt="OPTICA">
        </div>
      </div>
  </section>

</body>

</html>
<?php include BASE_PATH . 'layout/footer.php'; ?>