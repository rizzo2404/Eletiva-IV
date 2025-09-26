<?php
$n = $_POST['num'] ?? null;
$resultado = pow($n, 2);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Resultado Ex12</title></head>
<body>
<h2>Resultado</h2>
<p><?="$n² = $resultado"?></p>
<a href="index12.php">Voltar</a>
</body>
</html>
