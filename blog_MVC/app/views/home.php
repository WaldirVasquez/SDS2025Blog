<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana de Sistemas 2025 - SDS25</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/index.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <!-- Logo -->
                <div class="logo">
                    <div class="logo-icon">
                        <span>S</span>
                    </div>
                    <span class="logo-text">SDS25</span>
                </div>

                <!-- Menu -->
                <nav class="nav-menu">
                    <a href="#" class="nav-item">Inicio</a>
                    <a href="#" class="nav-item">Día 1</a>
                    <a href="#" class="nav-item">Día 2</a>
                    <a href="#" class="nav-item">Día 3</a>
                    <a href="#" class="nav-item">Día 4</a>
                    <a href="#" class="nav-item">Día 5</a>
                    <a href="#" class="nav-item">Mi Información</a>
                    <a href="#" class="nav-item"><button class="button">Registrar Visita</button></a>


                </nav>

                <!-- Mobile Menu Button -->
                <button class="mobile-menu-btn">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

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
                        Este poryecto tiene tiene como objetivo la creacion de este blog para seguir mas de cerca  La Semana de Sistemas 2025.
                        Asi como tambien aprender y practicar el patron de diseño MVC (Modelo-Vista-Controlador) utilizando PHP.
                        El  proyecto incluye funcionalidades como la visualización de itinerarios, detalles de ponencias y
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
                <button class="card-btn">Ir al Día 1</button>
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
        <button class="card-btn">Ir al Día 4</button>
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
            <img src="/images/tarde/fiesta.png" alt="Evento nocturno">
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

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <h3 class="footer-title">Semana de Sistemas 2025</h3>
                <p class="footer-subtitle">TPI</p>
                <a href="https://github.com/Waldir21/SDS2025_BLOG.git" target="_blank" rel="noopener noreferrer" class="github-link">
                    <div class="github-icon">
                        <svg width="32" height="32" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </div>
                </a>
                <p class="footer-copyright">© 2025 SDS25. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>
