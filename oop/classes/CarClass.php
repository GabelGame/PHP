<?php

class CarClass
{
    public $color;
    public $wheels = 4;
    public $speed;
    public $brand;

    public function __construct($color, $wheels=4, $speed=null, $brand=null)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
    }

    public function getCarInfo() {
        return "<h3>Авто: </h3>
                Марка: {$this->brand} <br>
                Цвет: {$this->color} <br>
                Колеса: {$this->wheels} <br>
                ";
    }
}