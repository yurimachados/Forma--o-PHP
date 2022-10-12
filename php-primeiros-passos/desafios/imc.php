<?php

$altura = 1.70;
$peso = 60;

$imc = $peso / ($altura * $altura);

echo "Seu IMC é de $imc. Portanto você esta em estado de: ";

if ($imc < 18.5){
    echo "Desnutrição";
}else if ($imc < 24.9){
    echo "Normal";
}else if($imc < 29.9){
    echo "Sobrepeso";
}else if ($imc < 34.9){
    echo "Obesidade classe I";
}else {
    echo "Obesidade classe II";
}
    