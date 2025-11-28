-- Criação do Banco de Dados
CREATE DATABASE IF NOT EXISTS chamados_db;
USE chamados_db;

-- Tabela de Clientes (RF1)
CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL
);

-- Tabela de Técnicos (RF2)
CREATE TABLE IF NOT EXISTS tecnicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    especialidade VARCHAR(100) NOT NULL
);

-- Tabela de Tipos de Chamados (RF3)
CREATE TABLE IF NOT EXISTS tipos_chamados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(100) NOT NULL
);

-- Tabela de Atendimentos (RF4)
CREATE TABLE IF NOT EXISTS atendimentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    id_tecnico INT NOT NULL,
    id_tipo INT NOT NULL,
    data_atendimento DATETIME NOT NULL,
    descricao_problema TEXT,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id),
    FOREIGN KEY (id_tecnico) REFERENCES tecnicos(id),
    FOREIGN KEY (id_tipo) REFERENCES tipos_chamados(id)
);
