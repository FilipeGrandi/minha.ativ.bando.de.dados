<?php
// variáveis podem conter tipos BOOLEANS

$vaiChover = true;
var_dump($vaiChover);

$vaiChover = false;
var_dump($vaiChover);

echo "=======================" . PHP_EOL;
// Variáveis podem ser usado em tomadas de decisão
// A função date("D") retorna o dia da semana no formato...
// Mon, Tue, Web, Thu, Fri, Sat, Sun
$diaDaSemana = date("D");
echo $diaDaSemana . PHP_EOL;

if($diaDaSemana == "Fri"){
    echo "Sextou!!!" . PHP_EOL;
}else{
    echo "Ainda não Sextou!!!" . PHP_EOL;
}



echo "=======================" . PHP_EOL;
// Constantes recebem um valor ao serem criadas...
// Mas não podem alterar esse valor

const VALOR_COMISSAO = 0.25; // por padrão ela é estrita em MAIÚSCULO
$totalFaturado = 1530;
$valorComissaoVenda = $totalFaturado * VALOR_COMISSAO;
echo "Valor da comissão: R$". $valorComissaoVenda . PHP_EOL;

echo "=======================" . PHP_EOL;
echo "Se tentarmo alterar o valor da CONSTANTE, vai gerar um erro de execução..." . PHP_EOL;
// VALOR_COMISSAO = 0.35; // descomente essa linha para gerar o erro de atribuição de constantes

// Uma forma legada de definir uma constante... mas não é mais recomentada
// define("MAX_CONECT", 50);
// echo MAX_CONECT . PHP_EOL;


echo PHP_EOL;