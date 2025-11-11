<?php
require_once __DIR__ . '/../config/conexao.php';
include __DIR__ . '/../includes/header.php';

$id = $_GET['id'];
$sql = "SELECT * FROM atendimentos WHERE id_atendimento=$id";
$result = $conexao->query($sql);
$atendimento = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_cliente = $_POST['id_cliente'];
    $id_tecnico = $_POST['id_tecnico'];
    $id_tipo = $_POST['id_tipo'];
    $data_atendimento = $_POST['data_atendimento'];
    $descricao = $_POST['descricao'];

    $sqlUpdate = "UPDATE atendimentos SET 
        id_cliente='$id_cliente', 
        id_tecnico='$id_tecnico', 
        id_tipo='$id_tipo', 
        data_atendimento='$data_atendimento', 
        descricao='$descricao'
        WHERE id_atendimento=$id";

    if ($conexao->query($sqlUpdate) === TRUE) {
        echo "<script>alert('Atendimento atualizado com sucesso!'); window.location='listar.php';</script>";
    } else {
        echo "Erro ao atualizar: " . $conexao->error;
    }
}
?>

<h2>Editar Atendimento</h2>

<form method="POST">
    Cliente:
    <select name="id_cliente" required>
        <?php
        $clientes = $conexao->query("SELECT * FROM clientes ORDER BY nome");
        while ($c = $clientes->fetch_assoc()) {
            $selected = ($c['id_cliente'] == $atendimento['id_cliente']) ? "selected" : "";
            echo "<option value='{$c['id_cliente']}' $selected>{$c['nome']}</option>";
        }
        ?>
    </select><br><br>

    Técnico:
    <select name="id_tecnico" required>
        <?php
        $tecnicos = $conexao->query("SELECT * FROM tecnicos ORDER BY nome");
        while ($t = $tecnicos->fetch_assoc()) {
            $selected = ($t['id_tecnico'] == $atendimento['id_tecnico']) ? "selected" : "";
            echo "<option value='{$t['id_tecnico']}' $selected>{$t['nome']}</option>";
        }
        ?>
    </select><br><br>

    Tipo de Chamado:
    <select name="id_tipo" required>
        <?php
        $tipos = $conexao->query("SELECT * FROM tipos_chamados ORDER BY descricao");
        while ($tp = $tipos->fetch_assoc()) {
            $selected = ($tp['id_tipo'] == $atendimento['id_tipo']) ? "selected" : "";
            echo "<option value='{$tp['id_tipo']}' $selected>{$tp['descricao']}</option>";
        }
        ?>
    </select><br><br>

    Data do Atendimento: 
    <input type="date" name="data_atendimento" value="<?php echo $atendimento['data_atendimento']; ?>" required><br><br>
    Descrição:<br>
    <textarea name="descricao" rows="4" cols="50"><?php echo $atendimento['descricao']; ?></textarea><br><br>

    <input type="submit" value="Salvar alterações">
</form>

<a href="listar.php">⬅️ Voltar</a>

<?php include __DIR__ . '/../includes/footer.php'; ?>
