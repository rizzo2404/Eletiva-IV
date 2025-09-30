<?php
$titulos = $_POST['titulo'];
$estoques = $_POST['estoque'];

$livros = [];

for ($i=0; $i<count($titulos); $i++) {
    $livros[$titulos[$i]] = $estoques[$i];
}

// Ordena pelo título
ksort($livros);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L4 - Ex5 Resultado</title></head>
<body>
<h2>Estoque de Livros</h2>
<ul>
<?php foreach ($livros as $titulo => $qtd): ?>
    <li>
        <?=$titulo?> - <?=$qtd?> unidade(s)
        <?php if ($qtd < 5): ?>
            <strong style="color:red;"> (Estoque Baixo!)</strong>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul>
<a href="index05.php">Voltar</a>
</body>
</html>
