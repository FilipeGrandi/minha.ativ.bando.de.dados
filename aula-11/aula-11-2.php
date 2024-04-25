<?php

$dbhost = "192.168.3.16";
$dbname = "banco_aula";
$username = "root";
$password = "root";

try {
    $con = new PDO("mysql:host=$dbhost;dbname=$dbname", $username, $password);
    echo "Conexão com o banco de dados MySQL bem sucedida!" . PHP_EOL;
} catch (PDOException $e) {
    echo "Erro ao conectar com o banco de dados: " . $e->getMessage() . PHP_EOL;
}


// Faz a troca dos dados com "posições nomeadas"
$data = [
    'nome' => 'Maria Joaquina',
    'email' => 'mariajoaquina@sbt.com',
    'user' => 'mariajoaquina'
];

$sql = "INSERT INTO 
    usuarios (
              id, user, email, nome) 
    VALUES (
            NULL, :user, :email, :nome)";
$resultado = $con->prepare($sql);
$resultado->execute($data);
