<?php
require_once __DIR__ . '/../config/conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tecnicos WHERE id_tecnico=$id";
    if ($conexao->query($sql) === TRUE) {
        echo "<script>alert('Técnico excluído com sucesso!'); window.location='listar.php';</script>";
    } else {
        echo "Erro ao excluir: " . $conexao->error;
    }
}
?>
