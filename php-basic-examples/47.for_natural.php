<?php
//Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи for. Простое число - это число которое делится только на себя и на 1
function if_natural($n){
    if($n==0 or $n==1)return false;
    for($d=2; $d*$d<=$n; $d++)
    {
        if($n%$d==0)return false;
    }
    return true;
}
for($i=0;$i<=100;$i++)//Till what number are we counting
{
    if(if_natural($i)) echo $i.", ";
}
?>
