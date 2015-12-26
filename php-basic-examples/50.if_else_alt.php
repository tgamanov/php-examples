<?php
$a = 77;
$b = 77;
echo "We have next variables: {$a} and {$b}, which on is bigger?"."<br>";
if ($a > $b) :
	echo $message = "The {$a} is bigger than {$b}.";
if ($a < $b) {
	echo $message = "The {$b} is bigger than {$a}.";
}
else {
	echo $message = "The {$a} and {$b} are equal.";
}
endif;
?>
