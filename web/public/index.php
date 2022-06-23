<?php

$numero = 1;
$edivisiel = false;

$resto = $numero % 10;
echo $resto.PHP_EOL;

if($numero % 10 == 0){
    $resto = $numero % 10;
    echo $resto;
    echo "é divisiel por 10";
    $edivisiel = true;
}

if($numero % 5 == 0){
    echo "é divisiel por 5";
    $edivisiel = true;
}

if($numero % 2 == 0){
    echo "é divisiel por 2";
    $edivisiel = true;
}

if(!$edivisiel){
    echo "não é divisível por 2, 5 e 10";
}

?>