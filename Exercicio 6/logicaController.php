<?php

$celsius = $_POST['temp'];

$fahrenheit = ($celsius * 9 / 5) + 32;

require_once 'view_saida.php';
?>