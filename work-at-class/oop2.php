<?php

abstract class Figure{
	abstract public function square();
	
	protected static $sum = 0;
	
	public function getSum(){
		return self::$sum;
	}
	
	function test(){
		echo "Я жив!";
	}
}

class Circle extends Figure{
	private $radius;
	
	function __construct($r){
		$this->radius = (float)$r;
		Figure::$sum += $this->square();
	}
	
	function square(){
		return 3.14 * 3.14 * $this->radius / 2;
	}
}

class Rectangle extends Figure{
	private $a;
	private $b;
	
	function __construct($a, $b){
		$this->a = (float)$a;
		$this->b = (float)$b;
		self::$sum += $this->square();
	}
	
	function square(){
		return $this->a * $this->b;
	}
}	

$arr = array(
	new Circle(5), new Rectangle(39,33),
	new Rectangle(21,9), new Circle(11.4),
	new Rectangle(15, 2)
);

/*$square = 0;
foreach($arr as $obj){
	$obj->test(); die;
	// Полиморфизм!
	$square += $obj->square();
}*/

//echo "Общая площадь: {$square}";

echo "Общая площадь: ".Figure::getSum();









