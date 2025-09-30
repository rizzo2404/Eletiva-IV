<?php
function contarCaracteres($texto) {
    return strlen($texto); 
}

$palavra = $_POST['palavra'];
$qtd = contarCaracteres($palavra);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L3 - Ex1 Resultado</title></head>
<body>
<h2>Resultado</h2>
<p><?="A palavra '$palavra' tem $qtd caracteres."?></p>
<a href="index01.php">Voltar</a>
</body>
</html>
