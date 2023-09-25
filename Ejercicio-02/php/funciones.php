<?php 

  function cotizacionDivisa($codDivisa) {
    $cotizacion = 1;
    switch ($codDivisa) {
      case 'USD':
        $cotizacion = 349.65;
        break;
      case 'BRL':
        $cotizacion = 71.82;
        break;
      case 'EUR':
        $cotizacion = 372.96;
        break;
      case 'CNH':
        $cotizacion = 47.98;
        break;
    }

    return $cotizacion;
  }

  function obtenerDivisa ($codDivisa) {
    $divisa = '';
    switch ($codDivisa) {
      case 'USD':
        $divisa = 'Dólares';
        break;
      case 'BRL':
        $divisa = 'Reales';
        break;
      case 'EUR':
        $divisa = 'Euros';
        break;
      case 'CNH':
        $divisa = 'Yuanes';
        break;
    }

    return $divisa;
  }
?>