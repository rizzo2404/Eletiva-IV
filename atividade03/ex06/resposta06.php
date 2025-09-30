<?php
function arredondarNumero($n) {
    return round($n); 
}

$num = $_POST['num'];
$arredondado = arredondarNumero($num);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L3 - Ex6 Resultado</title></head>
<body>
<h2>Resultado</h2>
<p><?="Número original: $num"?></p>
<p><?="Arredondado: $arredondado"?></p>
<a href="index06.php">Voltar</a>
</body>
</html>
