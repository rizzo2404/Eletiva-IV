<?php
require_once __DIR__ . '/../config/conexao.php';
include __DIR__ . '/../includes/header.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tecnicos WHERE id_tecnico=$id";
$result = $conexao->query($sql);
$tecnico = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $especialidade = $_POST['especialidade'];

    $sqlUpdate = "UPDATE tecnicos SET nome='$nome', especialidade='$especialidade' WHERE id_tecnico=$id";
    if ($conexao->query($sqlUpdate) === TRUE) {
        echo "<script>alert('Técnico atualizado com sucesso!'); window.location='listar.php';</script>";
    } else {
        echo "Erro ao atualizar: " . $conexao->error;
    }
}
?>

<h2>Editar Técnico</h2>
<form method="POST">
    Nome: <input type="text" name="nome" value="<?php echo $tecnico['nome']; ?>" required><br><br>
    Especialidade: <input type="text" name="especialidade" value="<?php echo $tecnico['especialidade']; ?>"><br><br>
    <input type="submit" value="Salvar alterações">
</form>

<a href="listar.php">⬅️ Voltar</a>

<?php include __DIR__ . '/../includes/footer.php'; ?>
