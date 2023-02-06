<?php
    class food extends product
    {
        public $material;
        public $size;
        public $ingredients;

        public function __construct($image,$title, $price, $category, $material, $size, $ingredients)
        {
            parent::__construct($image, $title, $price, $category);
            $this->material = $material;
            $this->size = $size;
        }
    }
?>