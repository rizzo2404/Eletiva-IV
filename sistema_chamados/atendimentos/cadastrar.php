<?php
require_once __DIR__ . '/../config/conexao.php';
include __DIR__ . '/../includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_cliente = $_POST['id_cliente'];
    $id_tecnico = $_POST['id_tecnico'];
    $id_tipo = $_POST['id_tipo'];
    $data_atendimento = $_POST['data_atendimento'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO atendimentos (id_cliente, id_tecnico, id_tipo, data_atendimento, descricao)
            VALUES ('$id_cliente', '$id_tecnico', '$id_tipo', '$data_atendimento', '$descricao')";
    
    if ($conexao->query($sql) === TRUE) {
        echo "<script>alert('Atendimento registrado com sucesso!'); window.location='listar.php';</script>";
    } else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }
}
?>

<h2>Registrar Atendimento</h2>

<form method="POST">
    Cliente:
    <select name="id_cliente" required>
        <option value="">Selecione</option>
        <?php
        $clientes = $conexao->query("SELECT * FROM clientes ORDER BY nome");
        while ($c = $clientes->fetch_assoc()) {
            echo "<option value='{$c['id_cliente']}'>{$c['nome']}</option>";
        }
        ?>
    </select><br><br>

    Técnico:
    <select name="id_tecnico" required>
        <option value="">Selecione</option>
        <?php
        $tecnicos = $conexao->query("SELECT * FROM tecnicos ORDER BY nome");
        while ($t = $tecnicos->fetch_assoc()) {
            echo "<option value='{$t['id_tecnico']}'>{$t['nome']}</option>";
        }
        ?>
    </select><br><br>

    Tipo de Chamado:
    <select name="id_tipo" required>
        <option value="">Selecione</option>
        <?php
        $tipos = $conexao->query("SELECT * FROM tipos_chamados ORDER BY descricao");
        while ($tp = $tipos->fetch_assoc()) {
            echo "<option value='{$tp['id_tipo']}'>{$tp['descricao']}</option>";
        }
        ?>
    </select><br><br>

    Data do Atendimento: <input type="date" name="data_atendimento" required><br><br>
    Descrição:<br>
    <textarea name="descricao" rows="4" cols="50"></textarea><br><br>

    <input type="submit" value="Salvar">
</form>

<a href="listar.php">⬅️ Voltar</a>

<?php include __DIR__ . '/../includes/footer.php'; ?>
