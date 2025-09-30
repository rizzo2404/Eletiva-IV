<?php
function validarData($d, $m, $a) {
    return checkdate($m, $d, $a); 
}

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$valida = validarData($dia, $mes, $ano);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L3 - Ex4 Resultado</title></head>
<body>
<h2>Resultado</h2>
<?php if ($valida): ?>
    <p>Data válida: <?=sprintf("%02d/%02d/%04d", $dia, $mes, $ano)?></p>
<?php else: ?>
    <p style="color:red;">Data inválida!</p>
<?php endif; ?>
<a href="index04.php">Voltar</a>
</body>
</html>
