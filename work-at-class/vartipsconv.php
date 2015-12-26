<?php
$a = false;
$b = 3.654;
$c = '-2 items';
$d = ' 0.5kg';
$e = 'Added 10 points ';

// 0, 3, -2, 0.5, 0
var_dump( (int)$a, (int)$b, (int)$c, (float)$d, (float)$e );
//int(0) int(3) int(-2) float(0.5) float(0)