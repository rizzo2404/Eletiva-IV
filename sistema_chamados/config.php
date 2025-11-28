<?php
declare(strict_types=1);

$host = '127.0.0.1'; 
$dbname = 'chamados_db';
$username = 'root';
$password = '';
$port = '3307';   

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    
    $pdo = new PDO($dsn, $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Erro na conexão (Porta $port): " . $e->getMessage());
}
?>