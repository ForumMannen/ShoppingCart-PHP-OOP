<?php


class CartItem
{
    private $product;
    private int $quantity;

    // TODO Skriv en konstruktor som sätter alla properties
    public function __construct($product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }
    // TODO Skriv getters för alla properties
    public function getQuantity(){
        return $this-> quantity;
    }

    public function getProduct(){
        return $this-> product;
    }

    //VG: Skall utöka antalet på ett cartItem med 1. 
    //VG: Det skall inte vara möjligt att utöka så att antalet överstiger produktens $inStock.
    public function increaseQuantity()
    {
        if($this->product->getInStock() > $this->quantity){
            $this->quantity += 1;
        } else {
            echo "Kan inte lägga till. Slut i lager";
        }
    }
}
