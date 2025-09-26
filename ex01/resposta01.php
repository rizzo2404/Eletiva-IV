<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Exercício 1 - Soma (Resultado)</title>
</head>
<body>
    <h2>Resultado da Soma</h2>

<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "<p>Envie os dados através do formulário. <a href='index01.php'>Voltar</a></p>";
    exit;
}

$n1_raw = $_POST['num1'] ?? null;
$n2_raw = $_POST['num2'] ?? null;

if ($n1_raw === null || $n2_raw === null) {
    echo "<p style='color:red;'>Dados incompletos. <a href='index01.php'>Voltar</a></p>";
    exit;
}

$n1 = filter_var($n1_raw, FILTER_VALIDATE_FLOAT);
$n2 = filter_var($n2_raw, FILTER_VALIDATE_FLOAT);

if ($n1 === false || $n2 === false) {
    echo "<p style='color:red;'>Um ou ambos os valores não são números válidos. <a href='index01.php'>Voltar</a></p>";
    exit;
}

$soma = $n1 + $n2;

if (floor($soma) != $soma) {
    $soma_str = number_format($soma, 4, '.', ''); // 4 casas decimais (ajuste se quiser)
    $soma_str = rtrim(rtrim($soma_str, '0'), '.');
} else {
    $soma_str = (string) intval($soma);
}

echo "<p>Primeiro número: " . htmlspecialchars($n1_raw) . "</p>";
echo "<p>Segundo número: " . htmlspecialchars($n2_raw) . "</p>";
echo "<h3>Resultado: {$soma_str}</h3>";
?>

    <p><a href="index01.php">Voltar ao formulário</a></p>
</body>
</html>
