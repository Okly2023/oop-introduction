<?php
class beverage{
    public string $color;
    public float $price;
    public string $temperature;

    public function __construct(string $color, float $price, string $temperature='cold'){
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function  getInfo(): string{
        return "the bevelage is {$this->temperature} and {$this->color}.";
    }

    public function useConstantInFunction(): string {
        return "Welcome to " . Beer::BARNAME . '<br>';
    }
}
//$cola = new beverage('black', 2);
//cho $cola->getInfo();
//echo $cola->temperature;
?>
