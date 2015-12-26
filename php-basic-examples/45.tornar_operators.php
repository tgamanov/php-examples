<?php
$a = 500;
$b = 500;
echo "We have next variables: {$a} and {$b}, which on is bigger?"."<br>";
//echo ($a > $b) ? "{$a} is bigger than {$b}.":"{$b} is bigger than {$a}.";
$ans = ($a == $b) ? "{$a} and {$b} are equal.": (($a > $b) ? "{$a} is bigger than {$b}.":"{$b} is bigger than {$a}.");
echo $ans;
?>
