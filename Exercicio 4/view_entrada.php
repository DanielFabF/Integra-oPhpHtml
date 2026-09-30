<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Média</title>
</head>
<body>
    <header>
        <h1>Calcular Média: </h1>
    </header>
    <main>
        <form action="logicaController.php" method="POST">
            <label for="nome">Nome do aluno: </label>
            <br>
            <input type="text" id="nome" name="nome">
            <br><br>

            <label for="nota1">Nota 1: </label>
            <br>
            <input type="number" id="nota1" name="nota1">
            <br><br>

            <label for="nota2">Nota 2: </label>
            <br>
            <input type="number" id="nota2" name="nota2">
            <br><br>
            <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>