<?php

$servidor = "localhost";
$banco = "banco_aula";
$usuario = "root";
$senha = "";

try {
    $con = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    echo "Conexão com o banco de dados MySQL bem sucedida!" . PHP_EOL;
} catch (PDOException $e) {
    echo "Erro ao conectar com o banco de dados: " . $e->getMessage() . PHP_EOL;
}

$sql = "select * from usuarios";
$resultado = $con->query($sql);

while ($linha = $resultado->fetch()) {
    echo $linha['nome'] . " - " . $linha['email'] . PHP_EOL;
}