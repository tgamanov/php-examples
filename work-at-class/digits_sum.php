<?php

/**
 * Вывести сумму цифр в строчке
 */

$str = 'h481njsj8kkd8a';

function getDigitsSum($str){
    if( !is_string($str) ){ // Проверяем, строка ли это
        return false;
    }

    $sum = 0;
    // Здесь используется str_split вместо цикла for / while просто для примера
    foreach(str_split($str) as $val){ // str_split может разбивать только строки, не массивы и т.д.
        $sum += (int)$val;
    }

    return $sum;
}

echo getDigitsSum(array('1',2,3));