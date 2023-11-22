<?php
include 'classes.php';

class Beer extends beverage {
    public string $name;
    public float $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold") {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(): float {
        return $this->alcoholPercentage;
    }

    public function useConstantInFunction(): string {
        return "Welcome to " . Beer::BARNAME . '<br>';
    }
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);
echo $duvel->getAlcoholPercentage() . '<br>';
echo $duvel->alcoholPercentage . '<br>';
echo $duvel->color . '<br>';
echo $duvel->getInfo() . '<br>';


// Uncomment the line below to get the Fatal error
//$beverage = new beverage("black", 2);
//echo $beverage->getAlcoholPercentage();
?>