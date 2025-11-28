<?php
require_once 'header.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) { echo "<script>window.location='tipos.php';</script>"; exit; }

$tipo = getTipoById($pdo, $id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    updateTipo($pdo, $id, $_POST['descricao']);
    echo "<script>alert('Tipo atualizado!'); window.location='tipos.php';</script>";
    exit;
}
?>

<div class="container">
    <h2>Alterar Tipo de Chamado</h2>
    <form method="post" class="card p-4 bg-light">
        <div class="form-group">
            <label>Descrição:</label>
            <input type="text" name="descricao" class="form-control" 
                   value="<?php echo htmlspecialchars($tipo['descricao']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        <a href="tipos.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<?php require_once 'footer.php'; ?>