<?php
$preco = $_POST['preco'];
if ($preco > 100) {
    $final = $preco * 0.85;
    $msg = "Preço com 15% de desconto: R$ " . number_format($final, 2);
} else {
    $msg = "Preço sem desconto: R$ " . number_format($preco, 2);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L2 - Ex4 Resultado</title></head>
<body>
<h2>Resultado</h2>
<p><?=$msg?></p>
<a href="index04.php">Voltar</a>
</body>
</html>
