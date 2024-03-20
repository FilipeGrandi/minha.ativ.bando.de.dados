<?php
class Computador{
    var $cpu;
    var $memoria;

    function ligar()
    {
        echo "Ligando..." . PHP_EOL;
        echo "CPU: {$this->cpu}". PHP_EOL;
        echo "Memória: {$this->memoria}" . PHP_EOL;
    }
}
$meuPC = new Computador();
$meuPC->cpu = "Thread-ripper";
$meuPC->memoria = "64GB";
$meuPC->ligar();

var_dump($meuPC);