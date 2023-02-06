<?php
    class product
    {
        public $image;
        public $title;
        public $price;  
        public $category;

        public function __construct($image, $title, $price, $category)
        {
            $this->image = $image;
            $this->title = $title;
            $this->price = $price;
            $this->category = $category;
        }
    }
?>