<?php
declare(strict_types=1);
require_once 'config.php';

// Função de segurança
function verificaLogin(): void {
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header('Location: login.php');
        exit();
    }
}

// --- FUNÇÕES GENÉRICAS ---
function listarTabela(PDO $pdo, string $tabela): array {
    $sql = "SELECT * FROM $tabela";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function excluirItem(PDO $pdo, string $tabela, int $id): void {
    try {

        
        if ($tabela === 'clientes') {
            $stmt = $pdo->prepare("DELETE FROM atendimentos WHERE id_cliente = :id");
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        }
        
        if ($tabela === 'tecnicos') {
            $stmt = $pdo->prepare("DELETE FROM atendimentos WHERE id_tecnico = :id");
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        }
        
        if ($tabela === 'tipos_chamados') {
            $stmt = $pdo->prepare("DELETE FROM atendimentos WHERE id_tipo = :id");
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        }

        $sql = "DELETE FROM $tabela WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

    } catch (PDOException $e) {
        die("Erro ao excluir: " . $e->getMessage());
    }
}

// --- RF1: CLIENTES (Create, Read, Update) ---
function criarCliente(PDO $pdo, string $nome, string $email, string $telefone): void {
    $sql = "INSERT INTO clientes (nome, email, telefone) VALUES (:nome, :email, :telefone)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':nome' => $nome, ':email' => $email, ':telefone' => $telefone]);
}

function getClienteById(PDO $pdo, int $id): ?array {
    $sql = "SELECT * FROM clientes WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
}

function updateCliente(PDO $pdo, int $id, string $nome, string $email, string $telefone): void {
    $sql = "UPDATE clientes SET nome = :nome, email = :email, telefone = :telefone WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':telefone', $telefone);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}

// --- RF2: TÉCNICOS ---
function criarTecnico(PDO $pdo, string $nome, string $especialidade): void {
    $sql = "INSERT INTO tecnicos (nome, especialidade) VALUES (:nome, :especialidade)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':nome' => $nome, ':especialidade' => $especialidade]);
}

// [NOVO] Buscar Técnico
function getTecnicoById(PDO $pdo, int $id): ?array {
    $sql = "SELECT * FROM tecnicos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
}

// [NOVO] Atualizar Técnico
function updateTecnico(PDO $pdo, int $id, string $nome, string $especialidade): void {
    $sql = "UPDATE tecnicos SET nome = :nome, especialidade = :especialidade WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':especialidade', $especialidade);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}

// --- RF3: TIPOS DE CHAMADO ---
function criarTipo(PDO $pdo, string $descricao): void {
    $sql = "INSERT INTO tipos_chamados (descricao) VALUES (:descricao)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':descricao' => $descricao]);
}

// [NOVO] Buscar Tipo
function getTipoById(PDO $pdo, int $id): ?array {
    $sql = "SELECT * FROM tipos_chamados WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
}

// [NOVO] Atualizar Tipo
function updateTipo(PDO $pdo, int $id, string $descricao): void {
    $sql = "UPDATE tipos_chamados SET descricao = :descricao WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':descricao', $descricao);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}

// --- RF4: ATENDIMENTOS ---
function criarAtendimento(PDO $pdo, int $idCliente, int $idTecnico, int $idTipo, string $data, string $desc): void {
    $sql = "INSERT INTO atendimentos (id_cliente, id_tecnico, id_tipo, data_atendimento, descricao_problema) 
            VALUES (:cli, :tec, :tipo, :data, :desc)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':cli' => $idCliente,
        ':tec' => $idTecnico,
        ':tipo' => $idTipo,
        ':data' => $data,
        ':desc' => $desc
    ]);
}

function listarAtendimentosDetalhado(PDO $pdo): array {
    $sql = "SELECT a.id, a.data_atendimento, a.descricao_problema, 
                   c.nome as cliente, t.nome as tecnico, tp.descricao as tipo
            FROM atendimentos a
            JOIN clientes c ON a.id_cliente = c.id
            JOIN tecnicos t ON a.id_tecnico = t.id
            JOIN tipos_chamados tp ON a.id_tipo = tp.id
            ORDER BY a.data_atendimento DESC";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>