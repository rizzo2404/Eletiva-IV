<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L4 - Ex2</title></head>
<body>
<h2>Cadastro de Alunos</h2>
<form action="resposta02.php" method="post">
<?php for ($i=1; $i<=5; $i++): ?>
    <fieldset>
        <legend>Aluno <?=$i?></legend>
        Nome: <input type="text" name="nome[]" required><br><br>
        Nota 1: <input type="number" step="any" name="nota1[]" required><br>
        Nota 2: <input type="number" step="any" name="nota2[]" required><br>
        Nota 3: <input type="number" step="any" name="nota3[]" required><br>
    </fieldset><br>
<?php endfor; ?>
    <button type="submit">Enviar</button>
</form>
</body>
</html>
