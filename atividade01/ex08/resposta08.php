<?php
$peso = $_POST['peso'] ?? null;
$altura = $_POST['altura'] ?? null;
$imc = $peso / ($altura * $altura);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Resultado Ex8</title></head>
<body>
<h2>Resultado do IMC</h2>
<p><?="Peso: $peso kg, Altura: $altura m"?></p>
<p><?="IMC = " . number_format($imc, 2)?></p>
<a href="index08.php">Voltar</a>
</body>
</html>
