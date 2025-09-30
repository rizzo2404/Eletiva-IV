<?php
$n = $_POST['n'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L2 - Ex8 Resultado</title></head>
<body>
<h2>Contagem regressiva a partir de <?=$n?></h2>
<p>
<?php
do {
    echo $n . " ";
    $n--;
} while ($n >= 1);
?>
</p>
<a href="index08.php">Voltar</a>
</body>
</html>
