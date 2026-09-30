<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultados Salários</h1>
    </header>
    <main>
        <p>Funcionário: <?= $nome?></p>
        <p>Cargo: <?= $Cargo?></p>
        <br>
        <p>Salário Atual: R$<?= $salario?></p>
        <p>Aumento: R$<?= $valoraumento?></p>
        <br>
        <p>Novo Salário: R$<?= $novosalario?></p>
    </main>
</body>
</html>