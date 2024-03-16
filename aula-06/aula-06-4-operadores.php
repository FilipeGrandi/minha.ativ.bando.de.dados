<?php
// bora testar os principais operadores do PHP

$numero1 = 10;
$numero2 = 15;

// Igual a (==)
if ($numero1 == $numero2) {
    echo "O número 1 é igual ao número 2." . PHP_EOL;
} else {
    echo "O número 1 não é igual ao número 2." . PHP_EOL;
}

// Idêntico a (===)
if ($numero1 === $numero2) {
    echo "O número 1 é idêntico ao número 2." . PHP_EOL;
} else {
    echo "O número 1 não é idêntico ao número 2." . PHP_EOL;
}

// Diferente de (!=)
if ($numero1 != $numero2) {
    echo "O número 1 é diferente do número 2." . PHP_EOL;
} else {
    echo "O número 1 não é diferente do número 2." . PHP_EOL;
}

// Menor que (<)
if ($numero1 < $numero2) {
    echo "O número 1 é menor que o número 2." . PHP_EOL;
} else {
    echo "O número 1 não é menor que o número 2." . PHP_EOL;
}

// Maior que (>)
if ($numero1 > $numero2) {
    echo "O número 1 é maior que o número 2." . PHP_EOL;
} else {
    echo "O número 1 não é maior que o número 2." . PHP_EOL;
}

// Menor ou igual a (<=)
if ($numero1 <= $numero2) {
    echo "O número 1 é menor ou igual ao número 2." . PHP_EOL;
} else {
    echo "O número 1 não é menor ou igual ao número 2." . PHP_EOL;
}

// Maior ou igual a (>=)
if ($numero1 >= $numero2) {
    echo "O número 1 é maior ou igual ao número 2." . PHP_EOL;
} else {
    echo "O número 1 não é maior ou igual ao número 2." . PHP_EOL;
}

$data1 = new DateTime('2023-03-08');
$data2 = new DateTime('2023-03-09');

if ($data1 < $data2) {
  echo "A data 1 é anterior à data 2." . PHP_EOL;
} else {
  echo "A data 1 não é anterior à data 2." . PHP_EOL;
}

$var1 = 10; // int
$var2 = "10"; // string

// Comparação de valores (==)
if ($var1 == $var2) {
  echo "Os valores são iguais." . PHP_EOL; // Imprime "Os valores são iguais."
} else {
  echo "Os valores não são iguais." . PHP_EOL;
}

// Comparação de tipos (===)
if ($var1 === $var2) {
  echo "Os tipos são iguais." . PHP_EOL; // Não imprime nada
} else {
  echo "Os tipos não são iguais." . PHP_EOL; // Imprime "Os tipos não são iguais."
}


class Pessoa {
  public $nome;

  public function __construct($nome) {
    $this->nome = $nome;
  }
}

$pessoa1 = new Pessoa("João");
$pessoa2 = new Pessoa("Maria");

// Comparação de valores (==)
if ($pessoa1 == $pessoa2) {
  echo "As pessoas são iguais." . PHP_EOL; // Não imprime nada
} else {
  echo "As pessoas não são iguais." . PHP_EOL; // Imprime "As pessoas não são iguais."
}

// Comparação de tipos (===)
if ($pessoa1 === $pessoa2) {
  echo "Os tipos são iguais." . PHP_EOL; // Não imprime nada
} else {
  echo "Os tipos não são iguais." . PHP_EOL; // Imprime "Os tipos não são iguais."
}

// Comparação de propriedades
if ($pessoa1->nome === $pessoa2->nome) {
  echo "Os nomes são iguais." . PHP_EOL; // Imprime "Os nomes são iguais."
} else {
  echo "Os nomes não são iguais." . PHP_EOL;
}
