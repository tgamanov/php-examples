<?php

/**
 * Вывести ТОП слов, которые встречаются в строке
 */

$str = 'Раз два три четыре раз два два два три четыре раз';

$words_arr = array();

foreach (explode(' ', $str) as $word){
    if ( !isset($words_arr[$word]) ){
        $words_arr[$word] = 0;
    }
    $words_arr[$word]++;
}
arsort($words_arr);

echo "<pre>";
echo "Топ слов:".PHP_EOL.PHP_EOL;
print_r($words_arr);