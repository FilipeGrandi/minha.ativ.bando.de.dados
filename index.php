<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Índices das aulas</title>
</head>
<body>

<?php
/*
 *  Esse arquivo index.php faz a listagem das pastas encontradas na rais do projeto
 *  e as mostra em html usando links para acessos às pastas  
 */

// Diretório a ser listado
$diretorio = "./";

// Abrir o diretório
$dh = opendir($diretorio);

// Se o diretório foi aberto com sucesso
if ($dh) {
    // Ler cada entrada do diretório
    while (($arquivo = readdir($dh)) !== false) {
        // Verificar se é um diretório e não é um diretório oculto
        if (is_dir($diretorio . $arquivo) && !preg_match('/^\./', $arquivo)) {
            // Exibir o nome do diretório
            echo "<a href=\"$arquivo\">$arquivo</a><br>";
        }
    }

    // Fechar o diretório
    closedir($dh);
} else {
    // Erro ao abrir o diretório
    echo "Erro ao abrir o diretório: $diretorio";
}
?>

</body>
</html>