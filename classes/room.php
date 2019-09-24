<?php
    class room
    {
        private $name;
        private $price;

        public function __construct($name, $price)
        {
            $this->name = $name;
            $this->price = $price;
        }


        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }


        /**
         * @return mixed
         */
        public function getPrice()
        {
            return $this->price;
        }

        public function toString()
        {
            return $this->getName()."\n".$this->getPrice();
        }

        public function toHTML()
        {
            $name = $this->getName();
            $price = $this->getPrice();
            return <<<ENDE
            
        <h1>$name</h1>
        <p>$price</p>
ENDE;
        }
    }