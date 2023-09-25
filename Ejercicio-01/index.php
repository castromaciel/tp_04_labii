<?php
require_once('./php/encabezado.php');
require_once('./php/funciones.php');

const APORTE_JUBILATORIO = 13;
const OBRA_SOCIAL = 3.5;

$sueldoBruto = 250000;

$porcentajes = array(
  15 => 0,
  16 => 0,
  17 => 0,
  18 => 0,
  19 => 0,
  20 => 0,
);

foreach ($porcentajes as $porcentajeAumento => $sueldoNeto) {
  $calculoSueldoNeto = calcularSueldoNeto($porcentajeAumento, APORTE_JUBILATORIO, OBRA_SOCIAL);

  $aumento = ($sueldoBruto * $calculoSueldoNeto) / 100;
  $porcentajes[$porcentajeAumento] = $sueldoBruto + $aumento;
}


?>

<main class="container">
  <table class="table">
    <thead>
      <th>Porcentaje</th>
      <th>Sueldo Neto</th>
    </thead>
    <tbody>

      <?php
      foreach ($porcentajes as $porcentajeAumento => $sueldoNeto) {
        echo '<tr>';
        echo '<td>' . $porcentajeAumento . '%</td>';
        echo '<td>$' . number_format($sueldoNeto, '2', ',', '.') . '</td>';
        echo '</tr>';
      }
      ?>

    </tbody>
  </table>
</main>

<?php
require_once('./php/pie.php');
?>