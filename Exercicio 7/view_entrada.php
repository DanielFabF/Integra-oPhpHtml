<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salario</title>
</head>
<body>
    <header>
        <h1>Calcular Salário</h1>
    </header>
    <main>
        <form action="logicaController.php" method="POST">
            <label for="nome">Nome do Funcionário:</label>
            <br>
            <input type="text" id="nome" name="nome">
            <br><br>

            <label for="salario">Salário Atual: </label>
            <br>
            <input type="number" id="salario" name="salario">
            <br><br>

            <label for="cargo">Selecione o Cargo: </label>
            <br>
            <select name="cargo" id="cargo">
                <option value="Estagiario">Estagiário</option>
                <option value="Assistente">Assistente</option>
                <option value="Analista">Analista</option>
            </select>
            <br><br>

            <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>