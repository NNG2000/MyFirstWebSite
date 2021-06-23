<?php

class Cakeentity {
     public $id;
    public $name;
    public $type;
    public $price;
    public $image;
    public $review;
    public function __construct($id, $name, $type, $price, $image, $review) {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->image = $image;
        $this->review = $review;
    }

}
?>