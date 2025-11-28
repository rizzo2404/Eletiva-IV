<?php 
require_once 'header.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    criarTecnico($pdo, $_POST['nome'], $_POST['especialidade']);
    echo "<script>window.location='tecnicos.php';</script>";
}

if (isset($_GET['excluir'])) {
    excluirItem($pdo, 'tecnicos', (int)$_GET['excluir']);
    echo "<script>window.location='tecnicos.php';</script>";
}

$lista = listarTabela($pdo, 'tecnicos');
?>

<div class="row">
    <div class="col-md-4">
        <h4>Novo Técnico</h4>
        <form method="post" class="card p-3 bg-light">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Especialidade:</label>
                <input type="text" name="especialidade" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
        </form>
    </div>
    <div class="col-md-8">
        <h4>Técnicos Cadastrados</h4>
        <table class="table table-bordered">
            <thead><tr><th>ID</th><th>Nome</th><th>Especialidade</th><th>Ação</th></tr></thead>
            <tbody>
                <?php foreach ($lista as $t): ?>
                <tr>
                    <td><?php echo $t['id']; ?></td>
                    <td><?php echo htmlspecialchars($t['nome']); ?></td>
                    <td><?php echo htmlspecialchars($t['especialidade']); ?></td>
                    <td>
                        <a href="alterar_tecnico.php?id=<?php echo $t['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="tecnicos.php?excluir=<?php echo $t['id']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once 'footer.php'; ?>