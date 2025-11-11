<?php
require_once __DIR__ . '/../config/conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tipos_chamados WHERE id_tipo=$id";
    if ($conexao->query($sql) === TRUE) {
        echo "<script>alert('Tipo de chamado excluído com sucesso!'); window.location='listar.php';</script>";
    } else {
        echo "Erro ao excluir: " . $conexao->error;
    }
}
?>
