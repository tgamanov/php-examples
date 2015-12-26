<?php

class Cnt{
	private static $c = 0;
	
	public function __construct(){
		self::$c++;
		echo "Создано ".self::$c." объектов!<br/>";
	}
}

$a = new Cnt();
$b = new Cnt();
$b = new Cnt();