<?php
class beverage{
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct(string $color, float $price, string $temperature='cold'){
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function  getInfo(): string{
        return "The beverage is {$this->temperature} and {$this->color}.";
    }

    public function printPrice(): void {
        echo "The price is {$this->price} euro.<br>";
    }
}

$cola = new beverage('black', 3.5);
echo $cola->getInfo() . '<br>';
$cola->printPrice();
?>