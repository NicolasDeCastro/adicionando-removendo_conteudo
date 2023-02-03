<?php

$alunos = [
    'ana' ,
    'nicolas' ,
    'pedro',
    'carlos',
    
    ];

    $novosAlunos=[
        'marilda',
        'marcos',
        'carla',
    ];
//    maneira de adicionar novos elementos no array

    array_push($alunos,'maicon','roberta','fabricio');

    $alunos[]='paulo';

 // unshift adiciona no inicio do array o valor

    array_unshift($alunos,'lucio');

// shift pega o 1 elemento do array

    echo array_shift($alunos);

    //pop pega o ultimo elemento do array

    array_pop($alunos);
    
    var_dump($alunos);