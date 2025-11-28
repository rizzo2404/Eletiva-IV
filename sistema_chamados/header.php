<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'funcoes.php';
verificaLogin();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Chamados</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">Suporte TI</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="clientes.php">Clientes (RF1)</a></li>
            <li class="nav-item"><a class="nav-link" href="tecnicos.php">Técnicos (RF2)</a></li>
            <li class="nav-item"><a class="nav-link" href="tipos.php">Tipos (RF3)</a></li>
            <li class="nav-item"><a class="nav-link" href="atendimentos.php">Atendimentos (RF4)</a></li>
        </ul>
        <span class="navbar-text text-white">
            Olá, <?php echo htmlspecialchars($_SESSION['username']); ?> | 
            <a href="logout.php" class="text-white" style="text-decoration: underline;">Sair</a>
        </span>
    </div>
</nav>
<div class="container mt-4">