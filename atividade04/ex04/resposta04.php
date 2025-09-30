<?php
$nomes = $_POST['nome'];
$precos = $_POST['preco'];

$itens = [];

for ($i=0; $i<count($nomes); $i++) {
    $precoComImposto = $precos[$i] * 1.15;
    $itens[$nomes[$i]] = $precoComImposto;
}

// Ordena pelos preços
asort($itens);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L4 - Ex4 Resultado</title></head>
<body>
<h2>Itens com Imposto (15%)</h2>
<ul>
<?php foreach ($itens as $nome => $preco): ?>
    <li><?=$nome?> - R$ <?=number_format($preco, 2, ',', '.')?></li>
<?php endforeach; ?>
</ul>
<a href="index04.php">Voltar</a>
</body>
</html>
