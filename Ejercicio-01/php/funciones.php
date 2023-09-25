<?php
  function calcularSueldoNeto ($porcentajeAumento, $aporteJubilatorio, $obraSocial) {
    $resultado = ($porcentajeAumento - $aporteJubilatorio - $obraSocial);
    return $resultado;
  }
?>