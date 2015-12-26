<?php

/**
 * Удалить те слова из текста, длина которых превышает N символов
 */

function removeLongWords($text, $max_length){
    $words = array_unique(explode(' ', $text)); // Берем только уникальные слова
    foreach($words as $word){
        if ( mb_strlen($word) > $max_length ){
            $text = str_replace($word, '', $text);
        }
    }
    return $text;
}

echo removeLongWords('Это предложение с очень длинными словами, его надо укоротить', 4);