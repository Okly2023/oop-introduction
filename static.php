<?php


class Beverage {
    protected string $color;
    protected float $price;
    protected string $temperature;
    protected static string $address = "Melkmarkt 9, 2000 Antwerpen";

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string {
        return "This beverage is " . $this->color . ", costs $" . $this->price . ", and should be served " . $this->temperature . ".<br>";
    }

    public static function getAddress(): string {
        return self::$address;
    }
}

class Beer extends Beverage {
    private string $name;
    private float $alcoholPercentage;
    const BAR_NAME = 'Het Vervolg';

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold") {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(): float {
        return $this->alcoholPercentage;
    }

    public function printBarName(): void {
        echo self::BAR_NAME . '<br>';
    }

    public function useConstantInFunction(): string {
        return "Welcome to " . self::BAR_NAME . '<br>';
    }
}

// Instantiate a Beer object
$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

// Access and print the properties and methods
echo $duvel->getAlcoholPercentage() . '<br>';
echo $duvel->color . '<br>';
echo $duvel->getInfo() . '<br>';
$duvel->printBarName();
echo $duvel->useConstantInFunction();
echo $duvel->useConstantInFunction() . '<br>';

// Access and print the static property from the Beverage class
echo Beverage::getAddress() . '<br>';
echo $duvel::getAddress() . '<br>'; // Alternative syntax for accessing static property

// Uncomment the line below to get the Fatal error
// $beverage = new Beverage("black", 2);
// echo $beverage->getAlcoholPercentage();
?>
