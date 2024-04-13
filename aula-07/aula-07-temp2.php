<?php
$tabuada = readline("Qual tabuada: ");

for ($i = 50   ; $i >= 0    ; $i--) {
    echo $tabuada . " x " . $i . " = " . $i*$tabuada . PHP_EOL;
}

