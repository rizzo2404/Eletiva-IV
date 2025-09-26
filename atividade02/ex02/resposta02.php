<?php
$a = $_POST['a']; $b = $_POST['b'];
$soma = $a + $b;
$resultado = ($a == $b) ? $soma * 3 : $soma;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L2 - Ex2 Resultado</title></head>
<body>
<h2>Resultado</h2>
<p><?="$a + $b = $soma"?></p>
<?php if ($a == $b): ?>
    <p>Como são iguais, triplo da soma = <?=$resultado?></p>
<?php else: ?>
    <p>Soma = <?=$resultado?></p>
<?php endif; ?>
<a href="index02.php">Voltar</a>
</body>
</html>
