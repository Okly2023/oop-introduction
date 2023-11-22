<?php
include 'classes.php';

class Beer extends beverage {
    private string $name;
    private float $alcoholPercentage;
    const BARNAME = 'Het Vervolg';

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold") {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(): float {
        return $this->alcoholPercentage;
    }

    public function printBarName(): void {
        echo self::BARNAME . '<br>';
    }

    public function useConstantInFunction(): string {
        return "Welcome to " . self::BARNAME . '<br>';
    }
}


$duvel = new Beer("blond", 3.5, "Duvel", 8.5);
echo $duvel->getAlcoholPercentage() . '<br>';
echo $duvel->color . '<br>';
echo $duvel->getInfo() . '<br>';
$duvel->printBarName();
echo $duvel->useConstantInFunction();
echo $duvel->useConstantInFunction() . '<br>';

// Uncomment the line below to get the Fatal error
//$beverage = new beverage("black", 2);
//echo $beverage->getAlcoholPercentage();
?>