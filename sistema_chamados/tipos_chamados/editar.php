<?php
require_once __DIR__ . '/../config/conexao.php';
include __DIR__ . '/../includes/header.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tipos_chamados WHERE id_tipo=$id";
$result = $conexao->query($sql);
$tipo = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descricao = $_POST['descricao'];

    $sqlUpdate = "UPDATE tipos_chamados SET descricao='$descricao' WHERE id_tipo=$id";
    if ($conexao->query($sqlUpdate) === TRUE) {
        echo "<script>alert('Tipo de chamado atualizado com sucesso!'); window.location='listar.php';</script>";
    } else {
        echo "Erro ao atualizar: " . $conexao->error;
    }
}
?>

<h2>Editar Tipo de Chamado</h2>
<form method="POST">
    Descrição: <input type="text" name="descricao" value="<?php echo $tipo['descricao']; ?>" required><br><br>
    <input type="submit" value="Salvar alterações">
</form>

<a href="listar.php">⬅️ Voltar</a>

<?php include __DIR__ . '/../includes/footer.php'; ?>
