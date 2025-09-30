<?php
$n1 = $_POST['n1'] ?? null;
$n2 = $_POST['n2'] ?? null;
$n3 = $_POST['n3'] ?? null;
$media = ($n1 + $n2 + $n3) / 3;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Resultado Ex5</title></head>
<body>
<h2>Resultado da Média</h2>
<p><?="($n1 + $n2 + $n3) / 3 = $media"?></p>
<a href="index05.php">Voltar</a>
</body>
</html>
