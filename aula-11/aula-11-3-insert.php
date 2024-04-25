<?php

// se existir dados vindos de POST faz a SANITIZAÇÃO dos dados de entrada
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);

    // conecta no banco de dados
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
        'nome' => $nome,
        'email' => $email,
        'user' => $usuario
    ];

    $sql = "INSERT INTO 
    usuarios (
              id, user, email, nome) 
    VALUES (
            NULL, :user, :email, :nome)";
    $resultado = $con->prepare($sql);

    // podemos executar um com bloco try/catch e uma transação para garantir
    // a execução correta e sem erros dos comandos
    try {
        $con->beginTransaction();
        $resultado->execute($data);
        // se tudo deu certo, faz o registro final no banco de dados
        $con->commit();
        header('Location: aula-11-3.php?insert=sucess');
    } catch (Exception $e) {
        // se deu algum problema, desfaz tudo
        $con->rollback();
        echo "Opa! Tivemos um erro.";
        throw $e;
    }

} else {
    die("Encerramento do Script, clique em voltar e reenvie o formulário");
}

