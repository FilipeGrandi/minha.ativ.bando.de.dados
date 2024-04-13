<?php

// uma classe em php

class Produto
{
    // atributos
    var $codigo;
    var $descricao;
    var $preco;
    var $quantidade;

    // métodos
    function imprimeEtiqueta()
    {
        print 'Código: ' . $this->codigo . PHP_EOL;
        print 'Descrição: ' . $this->descricao . PHP_EOL;
    }
}

// cria um Objeto
$sapato = new Produto();


$sapato->descricao = "Sapato Social Masculino";
$sapato->codigo = "321.654-98";
$sapato->quantidade = 1;
$sapato->preco = 233.90;

$sapato->imprimeEtiqueta();