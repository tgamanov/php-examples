<?php
$a = 256; // just some variable
$fruits= array('apples' => 5, 'bananas' => 10, 'oranges' => 3);

unset($a); // now $a is null
unset($fruits['bananas']); // now we don't have any babanas in array
print_r($fruits);
echo "<br>";
echo $fruits[1];