<?php

function a(): int
{
    try {
        echo 'Código';
        return 0;
    } catch (Throwable $e) {
        echo 'Problema';
        return 1;
    } finally {
        echo 'Final da função';
    }

}


// $arquivo = fopen('temp.txt', 'w');

// try {
//     fwrite($arquivo,'Qualquer coisa');
// } catch (Throwable $e) {
//     echo 'Caindo no  catch' . PHP_EOL;
// } finally {
//     fclose($arquivo);
// }