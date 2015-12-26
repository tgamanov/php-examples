<?php
function printarray(array $x) {
echo "<pre>";
print_r($x);
echo "</pre>";
}

$a = array (1,2,3,4,5,6,7);
printarray($a);
?>