<?php

// var_dump($_POST);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if($idade >= 18){
    $situacao = 'Maior de idade';
}else{
    $situacao = 'Menor de idade';
}

// Envia volores das variaveis para as saidas
require_once 'view_saida.php';

?>