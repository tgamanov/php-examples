<?php
//Реализовать функцию, которая определяет, будет ли число простым числом
function if_natural($n){
    if($n==0 or $n==1)return false;
    for($d=2; $d*$d<=$n; $d++)
    {
        if($n%$d==0)return "No.";
    }
    return "Yes.";
}
$x = 4;
echo "The number {$x} is simple? ".if_natural($x);
?>
