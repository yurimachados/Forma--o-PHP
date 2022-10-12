<?php

$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $cursos){
    $linha = [trim(utf8_decode($cursos)), 'Sim'];

    fputcsv($arquivoCsv, $linha, ";");    
}

foreach ($outrosCursos as $cursos){
    $linha = [trim(utf8_decode($cursos)), "Não"];

    fputcsv($arquivoCsv, $linha, ";");
}

fclose($arquivoCsv);