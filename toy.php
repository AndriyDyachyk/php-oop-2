<?php 

    class Toy extends Product{
        public $features;
        public $size;

        function __construct(String $_name, String $_image, Float $_price, String $_category, String $_features, String $_size){
            parent::__construct($_name, $_image, $_price, $_category);
            $this->features = $_features;
            $this->size = $_size;
        }
    }

?>