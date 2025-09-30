<?php
$a = $_POST['a']; $b = $_POST['b'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L2 - Ex3 Resultado</title></head>
<body>
<h2>Resultado</h2>
<?php
if ($a == $b) {
    echo "<p>Os números são iguais: $a</p>";
} else {
    $ordem = ($a < $b) ? "$a, $b" : "$b, $a";
    echo "<p>Ordem crescente: $ordem</p>";
}
?>
<a href="index03.php">Voltar</a>
</body>
</html>
