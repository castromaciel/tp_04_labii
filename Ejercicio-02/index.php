<?php
$rutaEstilos = './css';
require_once('./php/encabezado.php');
?>

<section class="container d-flex flex-column align-items-center">
  <form class="col-6 bg-warning p-4" method="POST" action="./php/procesa.php">
    <header>
      <h2>Compra de divisas</h2>
    </header>

    <section class="mb-3">
      <label for="monto" class="form-label">Monto disponible</label>
      <input type="text" name='monto' id="monto" class="form-control" />
    </section>

    <section>
      <label for="codDivisa">Divisa</label>
      <select class="form-select form-select-md mb-3" id='codDivisa' name='codDivisa'>
        <option value="USD">Dólar</option>
        <option value="BRL">Real</option>
        <option value="EUR">Euro</option>
        <option value="CNH">Yuan</option>
      </select>
    </section>

    <input class="btn btn-success" type="submit" value="comprar">

  </form>
</section>

<?php

require_once('./php/pie.php');
?>
