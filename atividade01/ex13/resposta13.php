<?php
$n = $_POST['num'] ?? null;
$resultado = pow($n, 3);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Resultado Ex13</title></head>
<body>
<h2>Resultado</h2>
<p><?="$n³ = $resultado"?></p>
<a href="index13.php">Voltar</a>
</body>
</html>
