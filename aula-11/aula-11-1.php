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

$sql = "select * from usuarios";
$resultado = $con->query($sql);

while ($linha = $resultado->fetch()) {
    echo $linha['nome'] . " - " . $linha['email'] . PHP_EOL;
}


echo " ======================================= " . PHP_EOL;
echo " Outra forma de fazer a mesma coisa... " . PHP_EOL;
echo " ======================================= " . PHP_EOL;

$sql = "select * from usuarios";
$dados = $con->query($sql)->fetchAll();

foreach ($dados as $linha) {
    echo $linha["nome"] . " - " . $linha["email"] . PHP_EOL;
}