<?php
require_once __DIR__ . '/../config/conexao.php';
include __DIR__ . '/../includes/header.php';

$id = $_GET['id'];
$sql = "SELECT * FROM clientes WHERE id_cliente=$id";
$result = $conexao->query($sql);
$cliente = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sqlUpdate = "UPDATE clientes SET nome='$nome', email='$email', telefone='$telefone' WHERE id_cliente=$id";
    if ($conexao->query($sqlUpdate) === TRUE) {
        echo "<script>alert('Cliente atualizado com sucesso!'); window.location='listar.php';</script>";
    } else {
        echo "Erro ao atualizar: " . $conexao->error;
    }
}
?>

<h2>Editar Cliente</h2>
<form method="POST">
    Nome: <input type="text" name="nome" value="<?php echo $cliente['nome']; ?>" required><br><br>
    Email: <input type="email" name="email" value="<?php echo $cliente['email']; ?>"><br><br>
    Telefone: <input type="text" name="telefone" value="<?php echo $cliente['telefone']; ?>"><br><br>
    <input type="submit" value="Salvar alterações">
</form>

<a href="listar.php">⬅️ Voltar</a>

<?php include __DIR__ . '/../includes/footer.php'; ?>
