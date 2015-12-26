<?php

/**
 * Есть скобки: [] () {}
 * Необходимо написать функцию, которая сможет
 * проверить правильность выражения, и выдать true / false
 *
 * [aa(123sdf)sdf{sdf}fff]fff - true
 * [aa(123sdf)sdf{sdf]fff}fff - false
 *
 */

$str = '[[[1(test){test2}]{}]{()}]';

function checkScopes($str){
    // Допустимые скобки
    $scopes = array('(',')','{','}','[',']');
    $allowed_pairs = array('()', '[]', '{}');

    // Здесь будет чистая строка
    $clean_string = '';
    for($i=0;$i<strlen($str);$i++){
        if ( in_array($str[$i], $scopes) ){

            // Если это одна из скобок - то добавляем ее в чистую строчку
            $clean_string .= $str[$i];

            // Таким образом, в чистой строчке содержатся только скобки
            // Теперь убираем пары
            $clean_string = str_replace($allowed_pairs, '', $clean_string);
        }
    }

    // Если в строчке еще остались символы - то это будет false (отрицание числа-не-нуля)
    return !strlen($clean_string);
}

var_dump(checkScopes($str));