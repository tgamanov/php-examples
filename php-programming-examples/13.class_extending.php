<?php//Унаследовать от класса Car из предыдущих занятий класс WaterCar со свойством waterSpeed.Class Car {    public $brand;    public $model;    public $year;    public $driver;    private $price;}class WaterCar extends Car{    public $waterSpeed =20;}$wc = new WaterCar();$wc->brand="H2O Car";echo "Have you saw new ".$wc->brand."? "." It has water speed ".$wc->waterSpeed." km per second!";