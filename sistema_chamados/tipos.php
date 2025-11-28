<?php 
require_once 'header.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    criarTipo($pdo, $_POST['descricao']);
    echo "<script>window.location='tipos.php';</script>";
}

if (isset($_GET['excluir'])) {
    excluirItem($pdo, 'tipos_chamados', (int)$_GET['excluir']);
    echo "<script>window.location='tipos.php';</script>";
}

$lista = listarTabela($pdo, 'tipos_chamados');
?>

<div class="row">
    <div class="col-md-4">
        <h4>Novo Tipo</h4>
        <form method="post" class="card p-3 bg-light">
            <div class="form-group">
                <label>Descrição:</label>
                <input type="text" name="descricao" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
        </form>
    </div>
    <div class="col-md-8">
        <h4>Tipos Cadastrados</h4>
        <table class="table table-bordered">
            <thead><tr><th>ID</th><th>Descrição</th><th>Ação</th></tr></thead>
            <tbody>
                <?php foreach ($lista as $tp): ?>
                <tr>
                    <td><?php echo $tp['id']; ?></td>
                    <td><?php echo htmlspecialchars($tp['descricao']); ?></td>
                    <td>
                        <a href="alterar_tipo.php?id=<?php echo $tp['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="tipos.php?excluir=<?php echo $tp['id']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once 'footer.php'; ?>