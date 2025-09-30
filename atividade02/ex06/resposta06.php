<?php
$n = $_POST['n'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L2 - Ex6 Resultado</title></head>
<body>
<h2>Números de 1 até <?=$n?></h2>
<p>
<?php
for ($i = 1; $i <= $n; $i++) {
    echo $i . " ";
}
?>
</p>
<a href="index06.php">Voltar</a>
</body>
</html>
