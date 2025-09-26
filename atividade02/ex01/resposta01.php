<?php
$nums = $_POST['nums'] ?? [];
$menor = min($nums);
$pos = array_search($menor, $nums) + 1;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L2 - Ex1 Resultado</title></head>
<body>
<h2>Resultado</h2>
<p>Números digitados: <?=implode(", ", $nums)?></p>
<p>Menor valor: <?=$menor?></p>
<p>Posição: <?=$pos?></p>
<a href="index01.php">Voltar</a>
</body>
</html>
