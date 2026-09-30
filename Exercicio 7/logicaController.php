<?php

$nome = $_POST['nome'];
$salario = $_POST['salario'];
$Cargo = $_POST['cargo'];

switch($Cargo){

    case 'Estagiario':
        $aumento = 0.1;
        break;

    case 'Assistente':
        $aumento = 0.08;
        break;

    case 'Analista':
        $aumento = 0.05;
        break;
}

$valoraumento = $salario * $aumento;

$novosalario = $valoraumento + $salario;

require_once 'view_saida.php';

?>