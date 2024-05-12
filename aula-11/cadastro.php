<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

    $dados = [
      "nome" => $nome,
      "email" => $email,
      "senha" => $senha
    ];

    $con = new PDO("mysql:host=localhost;dbname=banco_aula", "root", "");
}
?>


<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body>

<form action="cadastro.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email">

    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha"
           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
           title="Senha com 8 digitos letras maiusculas e minúsculas e numeros">

    <input type="submit" value="Enviar">
</form>

</body>
</html>