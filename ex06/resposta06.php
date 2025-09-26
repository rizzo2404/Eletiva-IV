<?php
$c = $_POST['celsius'] ?? null;
$f = ($c * 9/5) + 32;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Resultado Ex6</title></head>
<body>
<h2>Resultado da Conversão</h2>
<p><?="$c °C = $f °F"?></p>
<a href="index06.php">Voltar</a>
</body>
</html>
