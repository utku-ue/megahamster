<?php

require_once('room.php');


    class rectangle extends room
    {
        protected $name;
        protected $price;
        protected $length;
        protected $width;

        public function __construct($name, $price, $specials, $length, $width)
        {
            parent::__construct($name, $price, $specials);
            $this->length = $length;
            $this->width = $width;
        }

        public function getLength(){
            return$this->length;
        }

        public function getWidth(){
            return$this->width;
        }

        public function toHTML():string
        {
            $name = $this->getName();
            $price = $this->getPrice();
            $length = $this->getLength();
            $width = $this->getWidth();
            $area = $this->getArea();
            $specials = $this->getSpecials();

            return <<<ENDE
        <h1>$name</h1>
        <p>$price</p>
        <p>$length</p>
        <p>$width</p>
        <p>$area</p>
        <p>$specials</p>
ENDE;
        }

        public function getArea():float {
            return $this->getLength()*$this->getWidth();
        }

        /**
         * @return mixed
         */
        public function getSpecials()
        {
            return $this->specials;
        }


    }