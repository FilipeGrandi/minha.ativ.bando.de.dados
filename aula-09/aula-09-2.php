<?php
// construtores

class Pessoa {
    public $nome;
    public $idade;

    // construtor
    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}

// chamada passando valores na construção
$pessoa = new Pessoa('João', 30);
$bil = new Pessoa("Alberane", 44);

var_dump($pessoa);
var_dump($bil);
