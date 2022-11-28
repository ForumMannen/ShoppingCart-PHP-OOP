<?php


class Product
{
    private $id;
    private $title;
    private $price;
    private $inStock;

    // TODO Skriv en konstruktor som sätter alla properties
    public function __construct($id, $title, $price, $inStock)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->inStock = $inStock;
    }
    // TODO Skriv getters för alla properties
    public function getProducts() {
        return $this->id . " " . $this->title . " " . $this->price . " " . $this->inStock;
    }
}
