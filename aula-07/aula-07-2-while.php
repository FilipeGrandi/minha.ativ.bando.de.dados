<?php
$numeroAleatorio = rand(1,5);
$gameLoop = true;

while ($gameLoop){
    $chute = readline("Chute um numero entre 1 e 5: ");
    if($chute == $numeroAleatorio){
        echo "Acertou miserável!!!".PHP_EOL;
        $gameLoop = false; // faz sair do loop
    }else{
        echo "Errrouuu!!!".PHP_EOL;
    }
} // fim do while
echo "Obrigado por gastar seu tempo conosco".PHP_EOL;
