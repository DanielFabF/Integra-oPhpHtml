<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
</head>
<body>
    <header>
        <h1>Conversor</h1>
    </header>
    <main>
        <form action="logicaController.php" method="POST">
            <label for="temp">Temperatura em Celsius: </label>
            <br>
            <input type="number" id="temp" name="temp">
            <br><br>
            <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>