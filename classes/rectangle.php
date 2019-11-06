<?php
namespace SooS\megahamster;


class rectangle extends room implements \JsonSerializable
    {
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
        <p>Preis: $price EUR,-</p>
        <p>Länge: $length cm</p>
        <p>Breite: $width cm</p>
        <p>Fläche: $area cm²</p>
        <p>Extras: $specials</p>
        <hr>
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


    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize():array
    {
        $rv = [
            'name' => $this->name,
            'price' => $this->price,
            'length' => $this->length,
            'width' => $this->width,
            'area' => $this->getArea(),
            'specials' => $this->specials

        ];
        return $rv;
    }
}