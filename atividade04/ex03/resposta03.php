<?php
$codigos = $_POST['codigo'];
$nomes = $_POST['nome'];
$precos = $_POST['preco'];

$produtos = [];

for ($i=0; $i<count($codigos); $i++) {
    $preco = $precos[$i];
    if ($preco > 100) {
        $preco *= 0.9; 
    }
    $produtos[$codigos[$i]] = [
        'nome' => $nomes[$i],
        'preco' => $preco
    ];
}

uasort($produtos, function($a, $b) {
    return strcmp($a['nome'], $b['nome']);
});
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L4 - Ex3 Resultado</title></head>
<body>
<h2>Lista de Produtos</h2>
<ul>
<?php foreach ($produtos as $cod => $dados): ?>
    <li><?=$cod?> - <?=$dados['nome']?> - R$ <?=number_format($dados['preco'], 2, ',', '.')?></li>
<?php endforeach; ?>
</ul>
<a href="index03.php">Voltar</a>
</body>
</html>
