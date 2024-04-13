<?php
// Herança

class Animal {
    public $nome;
    public $idade;

    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function comer() {
        echo "{$this->nome} está comendo.\n";
    }

    public function dormir() {
        echo "{$this->nome} está dormindo.\n";
    }
}

class Cachorro extends Animal {
    public function latir() {
        echo "{$this->nome} está latindo.\n";
    }
}

class Gato extends Animal {
    public function miar() {
        echo "{$this->nome} está miando.\n";
    }
}

$choco = new Cachorro('Chocolate', 4);
$choco->comer();
$choco->dormir();
$choco->latir();

$gato = new Gato('Mia', 3);
$gato->comer();
$gato->dormir();
$gato->miar();
