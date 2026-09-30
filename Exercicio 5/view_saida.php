<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <p>Cliente: <?= $nomeCliente?></p>
        <p>Produto: <?= $nomeProduto?></p>
        <br>
        <p>Quantidade: <?= $quantidade?></p>
        <p>Preço Unitário: R$<?= $preco?></p>
        <br>
        <p>Subtotal: <?= $subtotal?></p>
        <p>Desconto: R$<?= $descontoDado?></p>
        <br>
        <p>Total: R$<?= $total?></p>
    </main>
</body>
</html>