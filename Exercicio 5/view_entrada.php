<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Desconto</title>
</head>
<body>
    <header>
        <h1>Calculadora de Desconto</h1>
    </header>
    <main>
        <form action="logicaController.php" method="POST">
            <label for="nome">Nome do Cliente: </label>
            <br>
            <input type="text" id="nome" name="nome">
            <br><br>
            
            <label for="NomeProduto">Nome do Produto: </label>
            <br>
            <input type="text" id="NomeProduto" name="NomeProduto">
            <br><br>

            <label for="preco">Preço: </label>
            <br>
            <input type="number" number_format="0.01" id="preco" name="preco">
            <br><br>

            <label for="quantidade">Quantidade: </label>
            <br>
            <input type="number" id="quantidade" name="quantidade">
            <br><br>

            <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>