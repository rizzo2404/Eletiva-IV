<?php
require_once __DIR__ . '/../config/conexao.php';
include __DIR__ . '/../includes/header.php';
?>

<h2>Lista de Tipos de Chamado</h2>
<a href="cadastrar.php">➕ Cadastrar novo tipo</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>

    <?php
    $sql = "SELECT * FROM tipos_chamados";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        while ($tipo = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $tipo['id_tipo'] . "</td>";
            echo "<td>" . $tipo['descricao'] . "</td>";
            echo "<td>
                    <a href='editar.php?id=" . $tipo['id_tipo'] . "'>✏️ Editar</a> |
                    <a href='excluir.php?id=" . $tipo['id_tipo'] . "' onclick='return confirm(\"Deseja realmente excluir?\")'>🗑️ Excluir</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Nenhum tipo de chamado cadastrado.</td></tr>";
    }
    ?>
</table>

<?php include __DIR__ . '/../includes/footer.php'; ?>
