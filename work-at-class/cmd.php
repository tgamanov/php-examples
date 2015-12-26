<?php

/*$a = array(1,2,34,18,1,38,91);
//поиск максимального числа в массиве
$max = null;
for ($i = 0;$i<count($a);$i++){
    if (is_null($max)||$max<$a[$i]){
        $max = $a[$i];
    }
    echo "current max:{$max}, element: ".$a[$i];
}
//echo "current maximum is {$max}";
echo "<br>";

foreach($a as $val){
    if ($max < $val){
        $max = $val;
    }
    echo "current max:{$max}, element: ".$a[$i];
}

$max = current($a)// current vallue
while(is_numeric($val=next($a))) {
    if($max < $val){
        $max=$val
    }
}

function getMaxElement (){
    echo "I am a getMaxElement!";
}
getMaxElement();


function getPriceWithDiscount($Price,$is_vip=0)
{
    $coef = 1;
    if ($is_vip) {
        $coef = 2;
    }
    if ($price >= 1000) {
        $price *= 0.9;// -10%
    } elseif ($price >= 500) {
        $price *= 0.95;// -5%
    } else {
        $price *= 0.97;// -3%
    }
}

*/

function multiplex(){

    $result = 1;
    foreach (func_get_args() as $val){
        $result*=$val;
    }
    print_r(debug_backtrace());
    print_r(__FILE__.":".__LINE__);
        return $result;
}
echo multiplex(1,2,3,4,5,6,7,8,9);