<?php
//Создать массив из 10 любых числовых значений. При помощи foreach вывести на экран те значения, которые делятся на 3
$ar = array(1,2,3,4,5,6,7,8,9,10);
foreach($ar as $ind => $zn) : //foreach ($arr as $item)
    if ($zn%3 == 0) echo $ind." - ".$zn."<br>";
endforeach;
?>