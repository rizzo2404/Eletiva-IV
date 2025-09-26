<?php
$raio = $_POST['raio'] ?? null;
$area = pi() * pow($raio, 2);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Resultado Ex10</title></head>
<body>
<h2>Resultado da Área</h2>
<p><?="Raio: $raio"?></p>
<p><?="Área = " . number_format($area, 2)?></p>
<a href="index10.php">Voltar</a>
</body>
</html>
