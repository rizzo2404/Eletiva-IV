<?php
$n1 = $_POST['n1']; $p1 = $_POST['p1'];
$n2 = $_POST['n2']; $p2 = $_POST['p2'];
$n3 = $_POST['n3']; $p3 = $_POST['p3'];

$media = ($n1*$p1 + $n2*$p2 + $n3*$p3) / ($p1 + $p2 + $p3);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Resultado Ex18</title></head>
<body>
<h2>Resultado</h2>
<p><?="Notas: $n1, $n2, $n3"?></p>
<p><?="Pesos: $p1, $p2, $p3"?></p>
<p><?="Média Ponderada = " . number_format($media, 2)?></p>
<a href="index18.php">Voltar</a>
</body>
</html>
