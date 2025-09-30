<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L4 - Ex3</title></head>
<body>
<h2>Cadastro de Produtos</h2>
<form action="resposta03.php" method="post">
<?php for ($i=1; $i<=5; $i++): ?>
    <fieldset>
        <legend>Produto <?=$i?></legend>
        Código: <input type="text" name="codigo[]" required><br><br>
        Nome: <input type="text" name="nome[]" required><br><br>
        Preço: <input type="number" step="0.01" name="preco[]" required><br>
    </fieldset><br>
<?php endfor; ?>
    <button type="submit">Enviar</button>
</form>
</body>
</html>
