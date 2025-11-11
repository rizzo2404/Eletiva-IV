<?php
require_once __DIR__ . '/../config/conexao.php';
include __DIR__ . '/../includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $especialidade = $_POST['especialidade'];

    $sql = "INSERT INTO tecnicos (nome, especialidade) VALUES ('$nome', '$especialidade')";
    if ($conexao->query($sql) === TRUE) {
        echo "<script>alert('Técnico cadastrado com sucesso!'); window.location='listar.php';</script>";
    } else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }
}
?>

<h2>Cadastrar Técnico</h2>
<form method="POST">
    Nome: <input type="text" name="nome" required><br><br>
    Especialidade: <input type="text" name="especialidade"><br><br>
    <input type="submit" value="Salvar">
</form>

<a href="listar.php">⬅️ Voltar</a>

<?php include __DIR__ . '/../includes/footer.php'; ?>
