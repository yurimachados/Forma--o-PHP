<?php

$alunos2021 = [
    'Ana',
    'João',
    'Maria',
    'Roberto',
    'Vinicius',
    'Gerson'
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kaduzm',
    'Marostica'
];

$alunos2022 = [...$alunos2021, 'Yuri', ...$novosAlunos];
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');
$alunos2022[] = 'Luiz';

array_unshift($alunos2022, 'Stephane', 'Rafaela');

var_dump($alunos2022);