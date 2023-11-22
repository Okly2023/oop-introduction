<?php
include 'classes.php';

class Beer extends beverage {
    private string $name;
    private float $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold") {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(): float {
        return $this->alcoholPercentage;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    private function beerInfo(): string {
        return "Hi i'm " . $this->name . " and have an alcohol percentage of " . $this->alcoholPercentage . " and I have a " . $this->color . " color.";
    }

    public function printBeerInfo(): void {
        echo $this->beerInfo() . '<br>';
    }
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);
echo $duvel->getAlcoholPercentage() . '<br>';
echo $duvel->getName() . '<br>';
echo $duvel->getColor() . '<br>';
echo $duvel->getInfo() . '<br>';

$duvel->setColor("light");
echo $duvel->getColor() . '<br>';

$duvel->printBeerInfo();
?>