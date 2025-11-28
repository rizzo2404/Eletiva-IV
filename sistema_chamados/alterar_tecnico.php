<?php
require_once 'header.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) { echo "<script>window.location='tecnicos.php';</script>"; exit; }

$tecnico = getTecnicoById($pdo, $id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $especialidade = $_POST['especialidade'];
    updateTecnico($pdo, $id, $nome, $especialidade);
    echo "<script>alert('Técnico atualizado!'); window.location='tecnicos.php';</script>";
    exit;
}
?>

<div class="container">
    <h2>Alterar Técnico</h2>
    <form method="post" class="card p-4 bg-light">
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" 
                   value="<?php echo htmlspecialchars($tecnico['nome']); ?>" required>
        </div>
        <div class="form-group">
            <label>Especialidade:</label>
            <input type="text" name="especialidade" class="form-control" 
                   value="<?php echo htmlspecialchars($tecnico['especialidade']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        <a href="tecnicos.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<?php require_once 'footer.php'; ?>