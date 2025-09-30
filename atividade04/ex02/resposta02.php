<?php
$nomes = $_POST['nome'];
$n1 = $_POST['nota1'];
$n2 = $_POST['nota2'];
$n3 = $_POST['nota3'];

$alunos = [];

for ($i=0; $i<count($nomes); $i++) {
    $media = ($n1[$i] + $n2[$i] + $n3[$i]) / 3;
    $alunos[$nomes[$i]] = $media;
}

arsort($alunos);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L4 - Ex2 Resultado</title></head>
<body>
<h2>Médias dos Alunos</h2>
<ul>
<?php foreach ($alunos as $nome => $media): ?>
    <li><?=$nome?> - Média: <?=number_format($media, 2)?></li>
<?php endforeach; ?>
</ul>
<a href="index02.php">Voltar</a>
</body>
</html>
