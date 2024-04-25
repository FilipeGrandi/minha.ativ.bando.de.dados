<?php

// Credenciais de acesso ao banco de dados
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = ""; // Insira sua senha de root aqui
$dbName = "seu_nome_banco_de_dados";

// Estabelecer conexão com o banco de dados
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verificar se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Exibir mensagem de sucesso
echo "Conectado ao banco de dados MySQL com sucesso!";

// Fechar a conexão (opcional, mas recomendado)
$conn->close();
