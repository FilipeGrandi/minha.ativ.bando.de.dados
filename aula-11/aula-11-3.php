<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="milligram.css" rel="stylesheet"/>
    <title>Fomulário e BD</title>
</head>
<body>

<h1>Cadastro de usuário</h1>

<?php
if (isset($_GET["insert"]) && $_GET["insert"] == "sucess") {
    echo "<h5>Cadastro Realizado com sucesso.</h5>";
}
?>

<form action="aula-11-3-insert.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="usuario">Usuário:</label>
    <input type="text" id="usuario" name="usuario" required>

    <button type="submit">Enviar</button>
</form>

</body>
</html>