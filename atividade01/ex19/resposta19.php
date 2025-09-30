<?php
$a = $_POST['a'] ?? null;
$b = $_POST['b'] ?? null;

$temp = $a;
$a = $b;
$b = $temp;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Resultado Ex19</title></head>
<body>
<h2>Resultado da Troca</h2>
<p><?="Novo valor de A: $a"?></p>
<p><?="Novo valor de B: $b"?></p>
<a href="index19.php">Voltar</a>
</body>
</html>
