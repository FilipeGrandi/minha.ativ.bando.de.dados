<?php
// variáveis são espaços de memória com um nome atribuído a ele...

// o espaço chamado "a" possuirá o valor de 50
$a = 50;

// mostrando o valor de "a" valor na tela...
echo "a: ". $a . PHP_EOL;

// Podemos atribuir o valor de "a" ao endereço "b".
// Isso cria uma cópia de "a" em "b"
$b = $a;
echo "a: ". $a . PHP_EOL;
echo "b: ". $b . PHP_EOL;

// Podemos sobrepor os valores atribuídos a uma variável
$b = 30;
echo "b: ". $b . PHP_EOL;
