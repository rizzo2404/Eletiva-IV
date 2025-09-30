<?php
$nomes = $_POST['nome'];
$telefones = $_POST['telefone'];
$contatos = [];

for ($i=0; $i<count($nomes); $i++) {
    $n = trim($nomes[$i]);
    $t = trim($telefones[$i]);

    if (isset($contatos[$n]) || in_array($t, $contatos)) {
        echo "<p style='color:red;'>Contato duplicado: $n / $t (ignorado)</p>";
        continue;
    }

    $contatos[$n] = $t;
}


ksort($contatos);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L4 - Ex1 Resultado</title></head>
<body>
<h2>Lista de Contatos</h2>
<ul>
<?php foreach ($contatos as $nome => $tel): ?>
    <li><?=$nome?> - <?=$tel?></li>
<?php endforeach; ?>
</ul>
<a href="index01.php">Voltar</a>
</body>
</html>
