<?php

$cursos = file_get_contents('lista-cursos.txt');

echo $cursos;

// $arquivo = fopen('lista-cursos.txt', 'r');

// // while (!feof($arquivo))
// // {
// //     $curso = fgets($arquivo, );

// //     echo $curso;
// // }

// $tamanhoDoArquivo = filesize('lista-curso.txt');
// $cursos = fread($arquivo, $tamanhoDoArquivo);

// echo $cursos;

// fclose($arquivo);