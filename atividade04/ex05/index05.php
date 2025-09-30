<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L4 - Ex5</title></head>
<body>
<h2>Cadastro de Livros</h2>
<form action="resposta05.php" method="post">
<?php for ($i=1; $i<=5; $i++): ?>
    <fieldset>
        <legend>Livro <?=$i?></legend>
        Título: <input type="text" name="titulo[]" required><br><br>
        Quantidade em estoque: <input type="number" name="estoque[]" min="0" required><br>
    </fieldset><br>
<?php endfor; ?>
    <button type="submit">Enviar</button>
</form>
</body>
</html>
