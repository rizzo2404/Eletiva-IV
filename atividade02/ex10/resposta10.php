<?php
$n = $_POST['n'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L2 - Ex10 Resultado</title></head>
<body>
<h2>Tabuada do <?=$n?></h2>
<ul>
<?php
for ($i = 1; $i <= 10; $i++) {
    $res = $n * $i;
    echo "<li>$n × $i = $res</li>";
}
?>
</ul>
<a href="index10.php">Voltar</a>
</body>
</html>
