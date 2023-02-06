<?php
    class food extends product
    {
        public $weight;
        public $ingredients;

        public function __construct($image, $title, $price, $category, $weight, $ingredients)
        {
            parent::__construct($image, $title, $price, $category);
            $this->weight = $weight;
            $this->ingredients = $ingredients;
        }
    }
?>