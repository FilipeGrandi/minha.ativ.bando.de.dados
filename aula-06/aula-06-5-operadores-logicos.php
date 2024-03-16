<?php
$numero1 = 10;
$numero2 = 15;


// Operador AND -- "E Lógico"
if ($numero1 > 5 && $numero2 < 20) {
  echo "As duas condições são verdadeiras." . PHP_EOL; // Imprime "As duas condições são verdadeiras."
} else {
  echo "Pelo menos uma das condições é falsa." . PHP_EOL;
}

// Operador OR -- "OU Lógico"
if ($numero1 > 5 || $numero2 < 20) {
  echo "Pelo menos uma das condições é verdadeira." . PHP_EOL; // Imprime "Pelo menos uma das condições é verdadeira."
} else {
  echo "As duas condições são falsas." . PHP_EOL;
}

// Operador NOT -- "NÂO Lógico"
if (!$numero1 > 5) {
  echo "O número é menor ou igual a 5." . PHP_EOL; // Imprime "O número é menor ou igual a 5."
} else {
  echo "O número é maior que 5." . PHP_EOL;
}

