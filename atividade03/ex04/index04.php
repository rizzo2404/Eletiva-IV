<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L3 - Ex4</title></head>
<body>
<h2>Validar Data</h2>
<form action="resposta04.php" method="post">
    <input type="number" name="dia" min="1" max="31" required placeholder="Dia"><br><br>
    <input type="number" name="mes" min="1" max="12" required placeholder="Mês"><br><br>
    <input type="number" name="ano" min="1" required placeholder="Ano"><br><br>
    <button type="submit">Validar</button>
</form>
</body>
</html>
