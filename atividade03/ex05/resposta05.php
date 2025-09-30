<?php
function calcularRaiz($n) {
    return sqrt($n); 
}

$num = $_POST['num'];
$raiz = calcularRaiz($num);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L3 - Ex5 Resultado</title></head>
<body>
<h2>Resultado</h2>
<p><?="√$num = " . number_format($raiz, 4)?></p>
<a href="index05.php">Voltar</a>
</body>
</html>
