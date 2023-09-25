<?php
$rutaEstilos = '../css';
require_once('./encabezado.php');
require_once('./funciones.php');

if (!empty($_POST['monto']) && !empty($_POST['codDivisa'])) {
  $monto = $_POST['monto'];
  $codigoDivisa = $_POST['codDivisa'];

  $monto_adqurido = $monto / cotizacionDivisa($codigoDivisa);

  $monto_adqurido = number_format($monto_adqurido, '4', ',', '.');
  $monto = number_format($monto, '2', ',', '.');
  $divisa = obtenerDivisa($codigoDivisa)
?>

  <main>
    <header class="bg-info">
      <h1>DIVISAS</h1>
    </header>

    <section class="bg-success">
      <h2>COMPRA</h2>
    </section>

    <section>
      <?php echo '<p>Monto disponible: $' . $monto . '</p>' ?>
    </section>

    <section class="bg-dark text-white">
      <?php echo '<p> ' . $divisa . ' adquiridos ' . $monto_adqurido . '</p>' ?>
    </section>

  </main>

<?php
} else {
  echo '<h2>Faltan Datos</h2>';
}

require_once('./php/pie.php');
?>