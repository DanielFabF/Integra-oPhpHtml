<?php

$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$nomeCliente = $_POST['nome'];
$nomeProduto = $_POST['NomeProduto'];

$subtotal = $preco * $quantidade;

if($subtotal >= 200){
    $desconto = 0.1;
    $descontoDado = $subtotal * $desconto;
}else{
    $desconto = 0;
    $descontoDado = 0;
}


$total = $subtotal - ($subtotal * $desconto);

require_once 'view_saida.php';

?>