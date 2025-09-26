<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Exercício 3 - Multiplicação (Resultado)</title>
</head>
<body>
    <h2>Resultado da Multiplicação</h2>

<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "<p>Envie os dados através do formulário. <a href='index03.php'>Voltar</a></p>";
    exit;
}

$n1_raw = $_POST['num1'] ?? null;
$n2_raw = $_POST['num2'] ?? null;

if ($n1_raw === null || $n2_raw === null) {
    echo "<p style='color:red;'>Dados incompletos. <a href='index03.php'>Voltar</a></p>";
    exit;
}

$n1 = filter_var($n1_raw, FILTER_VALIDATE_FLOAT);
$n2 = filter_var($n2_raw, FILTER_VALIDATE_FLOAT);

if ($n1 === false || $n2 === false) {
    echo "<p style='color:red;'>Valores inválidos. <a href='index03.php'>Voltar</a></p>";
    exit;
}

$resultado = $n1 * $n2;

if (floor($resultado) != $resultado) {
    $resultado_str = rtrim(rtrim(number_format($resultado, 4, '.', ''), '0'), '.');
} else {
    $resultado_str = (string) intval($resultado);
}

echo "<p>Primeiro número: " . htmlspecialchars($n1_raw) . "</p>";
echo "<p>Segundo número: " . htmlspecialchars($n2_raw) . "</p>";
echo "<h3>Resultado: {$resultado_str}</h3>";
?>

    <p><a href="index03.php">Voltar ao formulário</a></p>
</body>
</html>
