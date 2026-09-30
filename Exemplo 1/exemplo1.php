<?php       
    $nome = "Mateus";

    $arratInformacoes =[
        [
            'nome' => 'Mateus',
            'cpf' => '000.000.000-00',
            'idade' => 16
        ],
        [
            'nome' => 'Samuel',
            'cpf' => '001.000.000-00',
            'idade' => 23
        ]
    ]
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1 Php + HTML</title>
</head>
<body>
    <h1>Exemplo de Cadastro</h1>
    <p><?= $nome?></p>
    <h1>Informações do arry</h1>
    <?php
        foreach($arratInformacoes as $informacao){
    ?>
        <P>Exibindo Informações</P>
        <p>Nome: <?= $informacao['nome']?></p>
        <p>CPF: <?= $informacao['cpf']?></p>
        <p>Idade: <?= $informacao['idade']?></p>
    <?php } ?>
</body>
</html>