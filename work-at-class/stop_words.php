<?php

/**
 * Найти и указать позиции стоп слов в тексте
 */

$stop_words = "продам,предлагаю,предложение,вашему вниманию";

$str = "Я предлагаю предлагаю вашему вниманию новую услугу от нашей компании! предлагаю Предложение действует до 31.12";

function getStopWords($str, $stop_words){
    $stop_words_arr = explode(',', $stop_words);
    $str = mb_strtolower($str);
    $matches = array();
    foreach($stop_words_arr as $word){
        if ( false !== $pos = mb_strpos($str, mb_strtolower($word)) ){
            $matches[$word][] = $pos;
        }
    }
    echo "<pre>"; print_r($matches); die;
    return $matches;
}

$result = getStopWords($str, $stop_words);

foreach($result as $word => $found){
    echo "Слово @{$word}@ найдено в позиции ";
    echo implode(',', $found);
    echo "<br>";
}