<?php

include "Produto.class.php";

$computador = new Produto();

$computador->preco = 3200.50;
$computador->quantidade = 3;
$computador->descricao = "Computador do Milhão";
$computador->codigo = "789.345.678-098";


$computador->imprimirEtiqueta();

$pc2 = new Produto();
$pc2->quantidade = 10;
$pc2->descricao = "PC II";
$pc2->codigo = "23123";
$pc2->preco = 1200.00;

$pc2->imprimirEtiqueta();



