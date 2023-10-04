<?php
declare(strict_types=1); //Strict Mode Enabled

class Product{
    public int $id;
    public String $name;
    public float $price;
    public function __construct(int $id, String $name, float $price){
        $this->id = $id; //initializing id(int) in  the class variable
        $this->name = $name; //initializing name(String) in  the class variable
        $this->price = $price; //initializing price(float) in  the class variable
    }

    public function getFormattedPrice(){
        return number_format((float)$this->price, 2, '.', ''); //returns as a String with two decimal places.
        
    }

    public function showDetails(){
        $formatted_price = $this->getFormattedPrice();
        //$dataType = gettype($formatted_price);
        //echo $dataType."\n";

        //prints the products details.
        echo "Product Details:\n";
        echo "- ID: ".$this->id."\n";
        echo "- Name: ".$this->name."\n";
        echo "- Price: $".$formatted_price."\n";
    }
}

//Testing Product class
$product = new Product(1, "T-shirt", 19.99);
$product->showDetails();

//$product2 = new Product(2, "T-shirt", 40.44);
//$product2->showDetails();

?>