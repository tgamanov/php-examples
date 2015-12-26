<?php
$a = 500;
$b = 500;
echo "We have next variables: {$a} and {$b}, which on is bigger?"."<br>";
switch ($a > $b) {
	case 'TRUE':
	 echo "The {$a} is bigger than {$b}.";
		break;
	case 'FALSE':
		echo "The {$b} is bigger than {$a}.";
		break;
	default:
		echo $message = "The {$a} and {$b} are equal.";
		break;
}
?>
