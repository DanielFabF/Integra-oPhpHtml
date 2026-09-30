<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <header>
        <h1>Calculadora</h1>
    </header>
    <main>
        <form action="logicaController.php" method="POST">
            <label for="numero1">Numero 1: </label>
            <br>
            <input type="number" id="numero1" name="numero1">
            <br><br>
            <label for="numero2">Numero 2: </label>
            <br>
            <input type="number" id="numero2" name="numero2">
            <br><br>
            <label for="calculo">Operação: </label>
            <select name="calculo" id="calculo">
                <option value="somar">Soma</option>
                <option value="subtracao">Subtração</option>
                <option value="divisao">Divisão</option>
                <option value="multiplicacao">Multiplicação</option>
            </select>


            <button type="submit">Enviar</button>

        </form>

    </main>
</body>
</html>