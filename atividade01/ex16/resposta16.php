<?php
$n = $_POST['num'] ?? null;
$quadrado = pow($n, 2);
$cubo = pow($n, 3);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Resultado Ex16</title></head>
<body>
<h2>Resultado</h2>
<p><?="$n² = $quadrado"?></p>
<p><?="$n³ = $cubo"?></p>
<a href="index16.php">Voltar</a>
</body>
</html>
