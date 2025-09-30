<?php
$base = $_POST['base'] ?? null;
$altura = $_POST['altura'] ?? null;
$area = $base * $altura;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Resultado Ex9</title></head>
<body>
<h2>Resultado da Área</h2>
<p><?="Base: $base, Altura: $altura"?></p>
<p><?="Área = $area"?></p>
<a href="index09.php">Voltar</a>
</body>
</html>
