<?php

function pri($array, $level = 0){
    foreach($array as $key => $val){
        echo "[".$key;
        if (is_array($val)){
            pri($array,$level+1);
        }
        echo "] => " . $val . "<br>";
    }
}
//$a = 7777;
$a = array("foo", "bar", "hello", "world",array(1,2,3,4,5,6,7));
echo "Array \n(  \n";
pri($a);
echo ")";

?>