<?php
$capital = $_POST['capital'];
$taxa = $_POST['taxa'];
$tempo = $_POST['tempo'];

$juros = $capital * ($taxa/100) * $tempo;
$total = $capital + $juros;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Resultado Ex20</title></head>
<body>
<h2>Resultado dos Juros</h2>
<p><?="Capital: R$ $capital"?></p>
<p><?="Taxa: $taxa%"?></p>
<p><?="Tempo: $tempo meses"?></p>
<p><?="Juros: R$ " . number_format($juros, 2)?></p>
<p><?="Montante (Capital + Juros) = R$ " . number_format($total, 2)?></p>
<a href="index20.php">Voltar</a>
</body>
</html>
