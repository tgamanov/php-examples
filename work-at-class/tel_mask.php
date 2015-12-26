<?php

/**
 * Обработать телефон с помощью маски,
 * например (###) ###-##-##
 */

function telMask($tel, $mask){
    if ( $digits = str_split($tel) ) {

        $current_digit = current($digits);
        for ($i = 0; $i < strlen($mask); $i++) {
            if ($mask[$i] == '#') {
                $mask[$i] = $current_digit;
                $current_digit = next($digits);
            }

        }
    }
    return $mask;
}

echo telMask('0504128128', '(###) #-###-###');