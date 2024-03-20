<?php

// Comandos básicos de saída

echo "Fala aí rapaziada!!!" . PHP_EOL;

print("Pode ser assim também \n");

// declaração de variável
$variavel = 55;
var_dump($variavel);

$variavel = "Aluno";
var_dump($variavel);

$modelosDeCarros = array("Sandero", "Gol", "Belina", 150 ,"Fusca");
var_dump($modelosDeCarros);

echo "Apenas um dos itens: " . $modelosDeCarros[2]. PHP_EOL;
