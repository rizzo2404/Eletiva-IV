<?php
$n = $_POST['n'];
$fatorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $fatorial *= $i;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L2 - Ex9 Resultado</title></head>
<body>
<h2>Resultado</h2>
<p><?="$n! = $fatorial"?></p>
<a href="index09.php">Voltar</a>
</body>
</html>
