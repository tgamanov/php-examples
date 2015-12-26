<?php
/*for ($i = 10; $i <= 20; $i++) {
	echo  "Check for {$i} ... ";
	if ($i % 3 == 0) {
		echo 'gotcha! <br>';
		continue;
	}
	echo 'nope <br>';
}*/
//Создать алгоритм для определения первого найденного простого числа в промежутке от 200 до 400.
function if_natural($n){
    if($n==0 or $n==1)return false;
    for($d=2; $d*$d<=$n; $d++)
    {
        if($n%$d==0)return false;
    }
    return true;
}
for($i=200;$i<=400;$i++)//Till what number are we counting
{
    if(if_natural($i)) { echo $i." "; break;}
}
