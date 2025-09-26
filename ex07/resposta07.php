<?php
$f = $_POST['fahrenheit'] ?? null;
$c = ($f - 32) * 5/9;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Resultado Ex7</title></head>
<body>
<h2>Resultado da Conversão</h2>
<p><?="$f °F = $c °C"?></p>
<a href="index07.php">Voltar</a>
</body>
</html>
