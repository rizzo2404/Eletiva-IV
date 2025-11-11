<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../config/conexao.php';
include __DIR__ . '/../includes/header.php';
?>

<h2>Lista de Clientes</h2>
<a href="cadastrar.php">➕ Cadastrar novo cliente</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>

    <?php
    $sql = "SELECT * FROM clientes";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        while ($cliente = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $cliente['id_cliente'] . "</td>";
            echo "<td>" . $cliente['nome'] . "</td>";
            echo "<td>" . $cliente['email'] . "</td>";
            echo "<td>" . $cliente['telefone'] . "</td>";
            echo "<td>
                    <a href='editar.php?id=" . $cliente['id_cliente'] . "'>✏️ Editar</a> |
                    <a href='excluir.php?id=" . $cliente['id_cliente'] . "' onclick='return confirm(\"Deseja realmente excluir?\")'>🗑️ Excluir</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Nenhum cliente cadastrado.</td></tr>";
    }
    ?>
</table>

<?php include __DIR__ . '/../includes/footer.php'; ?>
