<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Exercício 4 - Divisão (Formulário)</title>
</head>
<body>
    <h2>Dividir dois números</h2>

    <form action="resposta04.php" method="post">
        <label>Dividendo (número 1):
            <input type="number" name="num1" step="any" required>
        </label>
        <br><br>
        <label>Divisor (número 2):
            <input type="number" name="num2" step="any" required>
        </label>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <p><a href="index04.php">Recarregar formulário</a></p>
</body>
</html>
