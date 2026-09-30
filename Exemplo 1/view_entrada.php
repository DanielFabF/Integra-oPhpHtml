<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1 - processamento de dados</title>
</head>
<body>
    <header>
        <h1>Formulário de cadastro</h1>
    </header>
    <main>
        <form action="logicaController.php" method="POST">
            <label for="nome">Nome: </label>
            <br>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
            <br><br>
            <label for="">Idade: </label>
            <br>
            <input type="number" id="idade" name="idade" placeholder="Digite sua idade">
            <br><br>
            <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>