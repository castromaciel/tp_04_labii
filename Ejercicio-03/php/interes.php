<?php
$rutaEstilos = '../css';
require_once('../php/encabezado.php');
require_once('../php/funciones.php');

if (!empty($_POST['deposito']) && !empty($_POST['plazo'])) {
  $depositoInicial = $_POST['deposito'];
  $cantidadDias = $_POST['plazo'];

  $interesesObtenidos = calcularIntereses($depositoInicial, $cantidadDias);

  $interesesObtenidos = number_format($interesesObtenidos, '2', ',', '.');
  $depositoInicial = number_format($depositoInicial, '2', ',', '.');

?>
<main class="container">
  <header>
    <h1 class="text-center">Simulador de plazos fijos</h1>
  </header>
  <section>
    <table class="table table-striped"">
      <tbody>
        <tr>
          <th>Plazo</th>
          <?php echo '<td>' . $cantidadDias . '</td>' ?>
        </tr>
        <tr>
          <th>Depósito inicial</th>
          <?php echo '<td>$' . $depositoInicial . '</td>' ?>
        </tr>
        <tr>
          <th>Intereses ganados </th>
          <?php echo '<td>$' . $interesesObtenidos . '</td>' ?>
        </tr>
      </tbody>
    </table>
  </section>
</main>

<?php
} else {
  echo 'Faltan datos para simular su plazo fijo!';
}
?>