<?php
    class toy extends product
    {
        public $desc;
        public $size;

        public function __construct($image, $title, $price, $category, $desc, $size)
        {
            parent::__construct($image, $title, $price, $category);
            $this->desc = $desc;
            $this->size = $size;
        }
    }
?>