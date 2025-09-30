<?php
$n = $_POST['n'];
$soma = 0;
$i = 1;
while ($i <= $n) {
    $soma += $i;
    $i++;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L2 - Ex7 Resultado</title></head>
<body>
<h2>Resultado</h2>
<p><?="Soma de 1 até $n = $soma"?></p>
<a href="index07.php">Voltar</a>
</body>
</html>
