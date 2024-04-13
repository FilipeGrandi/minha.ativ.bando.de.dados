<?php

class Pessoa {
    private $nome;
    private $idade;

    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getIdade(): string {
        return $this->idade;
    }

    public function setNome(int $nome){
        $this->nome = $nome;
    }

    public function setIdade(int $idade){
        $this->idade = $idade;
    }
}

$pessoa = new Pessoa('João', 30);
echo "Nome: " . $pessoa->getNome() . "\n";

// Não conseguimos acessar diretamente os atributos da classe
//$pessoa->idade = 40;
//echo "Idade: " . $pessoa->getIdade() . "\n";

// Agora pode acessar
$pessoa->setIdade(20);
echo "Idade: " . $pessoa->getIdade() . "\n";

