<?php 

    class Accessory extends Product{
        public $material;
        public $dimension;

        function __construct(String $_name, String $_image, Float $_price, String $_category, String $_material, String $_dimension){
            parent::__construct($_name, $_image, $_price, $_category);
            $this->material = $_material;
            $this->dimension = $_dimension;
        }
    }

?>