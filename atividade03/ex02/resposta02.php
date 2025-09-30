<?php
function transformarPalavra($texto) {
    return [
        'maiusculo' => strtoupper($texto), 
        'minusculo' => strtolower($texto)  
    ];
}

$palavra = $_POST['palavra'];
$resultado = transformarPalavra($palavra);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L3 - Ex2 Resultado</title></head>
<body>
<h2>Resultado</h2>
<p>Original: <?=$palavra?></p>
<p>Maiúsculo: <?=$resultado['maiusculo']?></p>
<p>Minúsculo: <?=$resultado['minusculo']?></p>
<a href="index02.php">Voltar</a>
</body>
</html>
