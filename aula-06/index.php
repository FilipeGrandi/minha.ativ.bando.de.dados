<?php
# Introdução ao php - Isso é um comentário - PARA HUMANOS APENAS ;-)

// Isso também é um comentário

/*
 * Isso também é um comentário, só que...
 * em várias linas... \m/
 *
 */

/**
 * Isso também é um comentário - ESPECIAL
 * Usado para documentação - phpDoc
 */

echo "=======================" . PHP_EOL;
$valor1 = 50;
$valor2 = 80;
echo $valor1 + $valor2 . PHP_EOL;


echo "=======================" . PHP_EOL;
$nome = "Aluno";
$nome = 99.3;
echo $nome . PHP_EOL;


echo "=======================" . PHP_EOL;
$var1 = "12";           // o valor está entre aspas, então é um texto
var_dump($var1);        // mostra a saída como string
$var2 = intval($var1);  // converte para inteiro
var_dump($var2);        // mostra a saída como inteiro
$var2 = 3.14;
var_dump($var2);


echo "=======================" . PHP_EOL;
// $bicho é um tipo complexo ARRAY com vários tipos INTERNOS
$bicho = array(
    ["Tartaruga", "Joana", 37, "Varginha", true],
    ["Cavalo", "Jaú", 12, "Três Pontas", true],
    ["Rato", "Mickey", 37, "Três Corações", false]
);

// a função print_r imprime o detalhamento de uma variável
var_dump($bicho);
print_r($bicho);
echo PHP_EOL;
