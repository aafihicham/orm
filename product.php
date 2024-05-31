<?php

class Product
{
    public $id;
    public $name;
    public $price;
    public $description; 

    public function __construct($name, $price, $description, $id = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description; 
    }
}


