<?php
function verificarContida($palavra1, $palavra2) {
    return stripos($palavra1, $palavra2) !== false; 
}

$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$contida = verificarContida($p1, $p2);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L3 - Ex3 Resultado</title></head>
<body>
<h2>Resultado</h2>
<?php if ($contida): ?>
    <p>A palavra '<?=$p2?>' está contida em '<?=$p1?>'.</p>
<?php else: ?>
    <p>A palavra '<?=$p2?>' NÃO está contida em '<?=$p1?>'.</p>
<?php endif; ?>
<a href="index03.php">Voltar</a>
</body>
</html>
