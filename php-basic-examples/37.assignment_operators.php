<?php
//Создать алгоритм обмена значениями двух переменных не используя третьей.
$a = 5;
$b = 7;
echo "a = ".$a."<br>";
echo "b = ".$b."<br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "<br>";
echo "a = ".$a."<br>";
echo "b = ".$b."<br>";
?>