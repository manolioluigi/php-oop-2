<?php
    class kennel extends product
    {
        public $material;
        public $size;

        public function __construct($image, $title, $price, $category, $material, $size)
        {
            parent::__construct($image, $title, $price, $category);
            $this->material = $material;
            $this->size = $size;
        }
    }
?>