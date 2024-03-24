<?php
$tabuada = readline("Digite o numero da tabuada que você deseja: ");
for ($i = 0; $i <= 10; $i++) {
     echo $tabuada." x ".$i." = ". $i*$tabuada.PHP_EOL;
}