<?php
require_once __DIR__ . '/../config/conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM clientes WHERE id_cliente=$id";
    if ($conexao->query($sql) === TRUE) {
        echo "<script>alert('Cliente excluído com sucesso!'); window.location='listar.php';</script>";
    } else {
        echo "Erro ao excluir: " . $conexao->error;
    }
}
?>
