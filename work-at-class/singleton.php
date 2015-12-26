<?php

class Singleton{

	private static $instance;

	// Еще можно назвать 
	// getObject()
	public static function getInstance(){
		if ( !self::$instance ){
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	private function __construct(){
		echo "Вызов конструктора<br/>";
	}
	
	public function test(){
		echo 'Я жив! '.rand(1,999)."<br/>";
	}
}

$a = Singleton::getInstance()->test();







