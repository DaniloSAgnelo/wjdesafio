# wjdesafio
Desafio Web Jump - Criar Aplicação de cadastro de produto com múltiplas categorias sem usar framework

*Como subir a aplicação*

1 - Criar Banco de dados

DROP DATABASE IF EXISTS wjdesafio;
CREATE DATABASE wjdesafio CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

2 - Selecionar Banco de dados criado

3 - Criar tabela de Categorias

DROP TABLE IF EXISTS categorias; 
CREATE TABLE categorias ( 
id int(11) NOT NULL AUTO_INCREMENT, 
nome varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO categorias (id, nome) VALUES (NULL, 'Geral');

4 - Criar tabela de Produtos

DROP TABLE IF EXISTS produtos; 
CREATE TABLE produtos ( 
nome varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL, 
sku int(11) NOT NULL, 
descricao text COLLATE utf8mb4_unicode_ci NOT NULL, 
preco decimal(15,2) NOT NULL, 
quantidade int(11) NOT NULL, 
categoria text COLLATE utf8mb4_unicode_ci NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

5 - Configurar o arquivo de conexao na pasta includes
