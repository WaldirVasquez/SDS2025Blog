<?php include BASE_PATH . 'layout/header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro de Visitas - Semana de Sistemas 2025</title>
  <link rel="stylesheet" href="/css/visita.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

  <div class="visita-container">
    <h1>Registro de Visita</h1>
    <p>
      Completa tus datos para registrar tu visita al blog de la 
      <strong>Semana de Sistemas 2025</strong>.
    </p>

    <form action="/visita/registrar" method="POST">
      <input type="text" name="nombre" placeholder="Tu nombre completo" required>
      <input type="email" name="correo" placeholder="Tu correo electrónico" required>
      <button type="submit">Registrar Visita</button>
    </form>

    <a href="/" class="volver">Volver al inicio</a>
  </div>

  <!-- vuadro de registro eexitoso -->
  <?php
if (isset($_GET['exito']) && $_GET['exito'] == '1') {
    echo "
    <script>
    Swal.fire({
      title: '¡Visita registrada!',
      text: 'Tu visita fue guardada exitosamente ',
      icon: 'success',
      background: 'rgba(255, 255, 255, 0.15)',
      color: '#fff',
      showConfirmButton: false,
      timer: 2500,
      timerProgressBar: true,
      backdrop: `
        rgba(10, 25, 41, 0.6)
        blur(8px)
      `,
      customClass: {
        popup: 'blur-popup'
      }
    }).then(() => {
      if (window.history.replaceState) {
        const url = new URL(window.location);
        url.searchParams.delete('exito');
        window.history.replaceState({}, document.title, url.pathname);
      }
    });
    </script>
    ";
}
?>
</body>
</html>
<?php include BASE_PATH . 'layout/footer.php'; ?>


