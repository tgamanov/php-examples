<?php
//Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre> В зависимости от значения второго аргумента функции, выводить используя var_dump или print_r. По умолчанию использовать print_r
function print_array(array $x, $m = "pr") {//by default we should use print_r
echo "<pre>";
if ($m == "vd"){//use var_dump if $m were provided as "vd"
	var_dump($x);
	}
else {
	print_r($x);
	}
echo "</pre>";
}
$a = array (1,2,3,4,5,6,7);
print_array ($a);
echo "</br>";
print_array ($a, "vd");
?>