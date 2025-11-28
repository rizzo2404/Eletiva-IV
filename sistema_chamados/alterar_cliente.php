<?php
require_once 'header.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

// Se não tem ID, volta
if (!$id) {
    echo "<script>window.location='clientes.php';</script>";
    exit;
}

// Busca os dados atuais
$cliente = getClienteById($pdo, $id);
if (!$cliente) {
    echo "<script>alert('Cliente não encontrado!'); window.location='clientes.php';</script>";
    exit;
}

// Se salvar
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';

    if ($nome && $email && $telefone) {
        updateCliente($pdo, $id, $nome, $email, $telefone);
        echo "<script>alert('Atualizado com sucesso!'); window.location='clientes.php';</script>";
        exit;
    }
}
?>

<div class="container">
    <h2>Alterar Cliente</h2>
    <form method="post" class="card p-4 bg-light">
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" 
                   value="<?php echo htmlspecialchars($cliente['nome']); ?>" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" 
                   value="<?php echo htmlspecialchars($cliente['email']); ?>" required>
        </div>
        <div class="form-group">
            <label>Telefone:</label>
            <input type="text" name="telefone" class="form-control" 
                   value="<?php echo htmlspecialchars($cliente['telefone']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        <a href="clientes.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<?php require_once 'footer.php'; ?>