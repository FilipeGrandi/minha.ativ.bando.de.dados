<?php
class Produto{
    // atributos
    var $preco;
    var $descricao;
    var $codigo;
    var $quantidade;
    // Métodos
    function imprimeEtiqueta()
    {
        echo "Descrição: " . $this->descricao . PHP_EOL;
        echo "Código: " . $this->codigo . PHP_EOL;
    }
}

$computador = new Produto();
$computador->descricao = "Computador do milhão";
$computador->codigo = "123-123.65";
$computador->preco = 3200.85;
$computador->quantidade = 3;

$computador->imprimeEtiqueta();