<?php
//Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи while. Простое число - это число которое делится только на себя и на 1
function if_natural($n){
    if($n==0 or $n==1)return false;
    $d = 2;
    while ($d*$d<=$n)
    {
        $d++;if($n%$d==0)return false;
    }
    return true;
}
$i = 0;
while($i<=100)//Till what number are we counting
{
    if(if_natural($i)) echo $i.", ";$i++;
}
?>