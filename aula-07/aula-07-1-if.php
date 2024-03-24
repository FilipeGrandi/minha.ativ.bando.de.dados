<?php
$nota = readline("Digite uma nota entre 0 e 10: ");

if ($nota >= 6) {
    $resultado = "Aprovado";
} else if ($nota >= 4) {
    $resultado = "Recuperação";
} else {
    $resultado = "Reprovado";
}

echo "Resultado: {$resultado}" . PHP_EOL;
