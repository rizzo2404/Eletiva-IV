<?php
require_once __DIR__ . '/../config/conexao.php';
include __DIR__ . '/../includes/header.php';
?>

<h2>Lista de Técnicos</h2>
<a href="cadastrar.php">➕ Cadastrar novo técnico</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Especialidade</th>
        <th>Ações</th>
    </tr>

    <?php
    $sql = "SELECT * FROM tecnicos";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        while ($tecnico = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $tecnico['id_tecnico'] . "</td>";
            echo "<td>" . $tecnico['nome'] . "</td>";
            echo "<td>" . $tecnico['especialidade'] . "</td>";
            echo "<td>
                    <a href='editar.php?id=" . $tecnico['id_tecnico'] . "'>✏️ Editar</a> |
                    <a href='excluir.php?id=" . $tecnico['id_tecnico'] . "' onclick='return confirm(\"Deseja realmente excluir?\")'>🗑️ Excluir</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Nenhum técnico cadastrado.</td></tr>";
    }
    ?>
</table>

<?php include __DIR__ . '/../includes/footer.php'; ?>
