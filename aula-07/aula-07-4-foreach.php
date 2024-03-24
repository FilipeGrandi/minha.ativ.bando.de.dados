<?php


// foreach percorrndo um array
$alunos = ["Mário", "Osmário", "Demário", "Valdemário", "Libinite"];
foreach ($alunos as $umAluno){
    echo $umAluno . PHP_EOL;
}

//obtendo a o índice de cada valor
foreach ($alunos as $chave => $umAluno){
    echo "Chave({$chave}) - Aluno:{$umAluno}" . PHP_EOL;
}
