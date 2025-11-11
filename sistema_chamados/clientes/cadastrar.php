<?php
require_once __DIR__ . '/../config/conexao.php';
include __DIR__ . '/../includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO clientes (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
    if ($conexao->query($sql) === TRUE) {
        echo "<script>alert('Cliente cadastrado com sucesso!'); window.location='listar.php';</script>";
    } else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }
}
?>

<h2>Cadastrar Cliente</h2>
<form method="POST">
    Nome: <input type="text" name="nome" required><br><br>
    Email: <input type="email" name="email"><br><br>
    Telefone: <input type="text" name="telefone"><br><br>
    <input type="submit" value="Salvar">
</form>

<a href="listar.php">⬅️ Voltar</a>

<?php include __DIR__ . '/../includes/footer.php'; ?>
