<?php
$mes = $_POST['mes'];
switch ($mes) {
    case 1: $nome="Janeiro"; break;
    case 2: $nome="Fevereiro"; break;
    case 3: $nome="Março"; break;
    case 4: $nome="Abril"; break;
    case 5: $nome="Maio"; break;
    case 6: $nome="Junho"; break;
    case 7: $nome="Julho"; break;
    case 8: $nome="Agosto"; break;
    case 9: $nome="Setembro"; break;
    case 10: $nome="Outubro"; break;
    case 11: $nome="Novembro"; break;
    case 12: $nome="Dezembro"; break;
    default: $nome="Inválido";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>L2 - Ex5 Resultado</title></head>
<body>
<h2>Resultado</h2>
<p><?=$mes?> = <?=$nome?></p>
<a href="index05.php">Voltar</a>
</body>
</html>
