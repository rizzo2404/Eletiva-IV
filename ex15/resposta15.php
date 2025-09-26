<?php
$base = $_POST['base'] ?? null;
$exp = $_POST['expoente'] ?? null;
$resultado = pow($base, $exp);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Resultado Ex15</title></head>
<body>
<h2>Resultado</h2>
<p><?="$base ^ $exp = $resultado"?></p>
<a href="index15.php">Voltar</a>
</body>
</html>
