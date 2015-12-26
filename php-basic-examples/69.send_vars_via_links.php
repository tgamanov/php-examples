<?php 
//Создать функцию, которая принимает один аргумент в виде массива и дописывает в него последним элементом количество значений массива
function addarraycount (array & $x) {
$x [] = count($x);
}
$mi = array ("one","two","three");
addarraycount($mi);
echo "<pre>";
print_r($mi);
echo "</ pre>";
?>
