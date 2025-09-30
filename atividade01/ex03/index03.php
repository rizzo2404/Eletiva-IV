<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Exercício 3 - Multiplicação (Formulário)</title>
</head>
<body>
    <h2>Multiplicar dois números</h2>

    <form action="resposta03.php" method="post">
        <label>Número 1:
            <input type="number" name="num1" step="any" required>
        </label>
        <br><br>
        <label>Número 2:
            <input type="number" name="num2" step="any" required>
        </label>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <p><a href="index03.php">Recarregar formulário</a></p>
</body>
</html>
