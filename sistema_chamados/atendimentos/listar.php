<?php
require_once __DIR__ . '/../config/conexao.php';
include __DIR__ . '/../includes/header.php';
?>

<h2>Lista de Atendimentos</h2>
<a href="cadastrar.php">➕ Registrar novo atendimento</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Técnico</th>
        <th>Tipo de Chamado</th>
        <th>Data</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>

    <?php
    $sql = "SELECT a.id_atendimento, c.nome AS cliente, t.nome AS tecnico, tp.descricao AS tipo, 
                   a.data_atendimento, a.descricao
            FROM atendimentos a
            JOIN clientes c ON a.id_cliente = c.id_cliente
            JOIN tecnicos t ON a.id_tecnico = t.id_tecnico
            JOIN tipos_chamados tp ON a.id_tipo = tp.id_tipo
            ORDER BY a.data_atendimento DESC";

    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $linha['id_atendimento'] . "</td>";
            echo "<td>" . $linha['cliente'] . "</td>";
            echo "<td>" . $linha['tecnico'] . "</td>";
            echo "<td>" . $linha['tipo'] . "</td>";
            echo "<td>" . date("d/m/Y", strtotime($linha['data_atendimento'])) . "</td>";
            echo "<td>" . $linha['descricao'] . "</td>";
            echo "<td>
                    <a href='editar.php?id=" . $linha['id_atendimento'] . "'>✏️ Editar</a> |
                    <a href='excluir.php?id=" . $linha['id_atendimento'] . "' onclick='return confirm(\"Deseja realmente excluir?\")'>🗑️ Excluir</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>Nenhum atendimento registrado.</td></tr>";
    }
    ?>
</table>

<?php include __DIR__ . '/../includes/footer.php'; ?>
