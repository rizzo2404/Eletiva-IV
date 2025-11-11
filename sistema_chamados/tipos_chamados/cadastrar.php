<?php
require_once __DIR__ . '/../config/conexao.php';
include __DIR__ . '/../includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO tipos_chamados (descricao) VALUES ('$descricao')";
    if ($conexao->query($sql) === TRUE) {
        echo "<script>alert('Tipo de chamado cadastrado com sucesso!'); window.location='listar.php';</script>";
    } else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }
}
?>

<h2>Cadastrar Tipo de Chamado</h2>
<form method="POST">
    Descrição: <input type="text" name="descricao" required><br><br>
    <input type="submit" value="Salvar">
</form>

<a href="listar.php">⬅️ Voltar</a>

<?php include __DIR__ . '/../includes/footer.php'; ?>
