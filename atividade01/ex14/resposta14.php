<?php
$n = $_POST['num'] ?? null;
$resultado = sqrt($n);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Resultado Ex14</title></head>
<body>
<h2>Resultado</h2>
<p><?="√$n = " . number_format($resultado, 4)?></p>
<a href="index14.php">Voltar</a>
</body>
</html>
