<?php
function test($x, $y)
{
	if ($y == 0) {
		die ("can not devide to 0");
	}
	return $x / $y;
}
echo test(1, 0);
echo 'Unreached line';