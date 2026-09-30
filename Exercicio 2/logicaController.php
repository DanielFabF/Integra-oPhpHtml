<?php

$numero1 = (float)$_POST['numero1'];
$numero2 = (float)$_POST['numero2'];
$operacao = $_POST['calculo'];
$resultado = 0;

switch ($operacao){
    case 'somar':
    $resultado = $numero1 + $numero2;
    break;

    case 'subtracao':
    $resultado = $numero1 - $numero2;
    break;

    case 'multiplicacao':
    $resultado = $numero1 * $numero2;
    break;

    case 'divisao':
    $resultado = $numero1 / $numero2;
    break;


}
    require_once 'view_saida.php';

?>