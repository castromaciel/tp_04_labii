<?php
$rutaEstilos = '../css';
require_once('../php/encabezado.php');

if (!empty($_POST['email'] && !empty($_POST['contrasenia']))) {

  $email = $_POST['email'];
  $contrasenia = $_POST['contrasenia'];

  echo "<section class='text-center'>";
  echo "<p class='text-white'>Email: " . $email . "</p>";
  echo "<p class='text-white'>Contraseña: " . $contrasenia . "</p>";
  echo "</section>";
  
} else {
  echo "<h1 class='text-white'>Para visualizar esta información, debe iniciar sesión</h1>";
}
?>
