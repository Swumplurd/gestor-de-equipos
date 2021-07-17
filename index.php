<?php
  require_once 'app/config.php';
?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
    require_once 'app/dependencias.php';
  ?>
  <title>Gestor de Equipos</title>
</head>

<body class="bg-dark bg-gradient text-light py-5" style="min-height: 100vh;">

  <?php
    if (isset($_GET['view'])) {
      switch ($_GET['view']) {
        case 'test':
          include_once 'app/conexion.php';
          break;
        case 'home':
          include_once 'view/home.php';
          require_once 'manager/m-formulario-equipo.php';
          break;
        default:
          include_once 'view/error404.php';
          break;
      }
    } else {
      header('location: home');
    }
  ?>

</body>
</html>