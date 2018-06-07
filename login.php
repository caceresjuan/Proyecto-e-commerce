<?php

$errores = [];

if ($_POST) {
  $errores = validarLogin($_POST);
  if (!$errores) {
    logear($_POST);
    header ('location: index.php');
    exit;
  }
}


 ?>
