<?php 
require_once 'header.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    criarCliente($pdo, $_POST['nome'], $_POST['email'], $_POST['telefone']);
    echo "<script>window.location='clientes.php';</script>";
}

if (isset($_GET['excluir'])) {
    excluirItem($pdo, 'clientes', (int)$_GET['excluir']);
    echo "<script>window.location='clientes.php';</script>";
}

$lista = listarTabela($pdo, 'clientes');
?>

<div class="row">
    <div class="col-md-4">
        <h4>Novo Cliente</h4>
        <form method="post" class="card p-3 bg-light">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Telefone:</label>
                <input type="text" name="telefone" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
        </form>
    </div>
    <div class="col-md-8">
        <h4>Clientes Cadastrados</h4>
        <table class="table table-bordered">
            <thead><tr><th>ID</th><th>Nome</th><th>Email</th><th>Ação</th></tr></thead>
            <tbody>
                <?php foreach ($lista as $c): ?>
                <tr>
                    <td><?php echo $c['id']; ?></td>
                    <td><?php echo htmlspecialchars($c['nome']); ?></td>
                    <td><?php echo htmlspecialchars($c['email']); ?></td>
                    <td>
                        <a href="alterar_cliente.php?id=<?php echo $c['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="clientes.php?excluir=<?php echo $c['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza?');">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once 'footer.php'; ?>