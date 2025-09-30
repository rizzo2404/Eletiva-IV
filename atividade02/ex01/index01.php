<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L2 - Ex1</title></head>
<body>
<h2>Digite 7 números</h2>
<form action="resposta01.php" method="post">
    <?php for ($i=1; $i<=7; $i++): ?>
        <input type="number" name="nums[]" step="any" required placeholder="Número <?=$i?>"><br><br>
    <?php endfor; ?>
    <button type="submit">Enviar</button>
</form>
</body>
</html>
