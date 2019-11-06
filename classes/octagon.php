<?php
namespace SooS\megahamster;

class octagon extends room implements \JsonSerializable {
    private $sidelength;

    /**
     * hexagon constructor.
     * @param $sidelength
     */
    public function __construct($name, $price, $specials, $sidelength)
    {
        parent::__construct($name, $price, $specials);
        $this->sidelength = $sidelength;
    }

    public function getArea():float {
        return (3/2)*pow(($this->getSidelength()),2)*sqrt(3);
    }

    /**
     * @return mixed
     */

    public function getSidelength()
    {
        return $this->sidelength;
    }

    public function toHTML():string {
        $name = $this->getName();
        $price = $this->getPrice();
        $sidelength = $this->getsidelength();
        $area = $this->getArea();
        $specials = $this->getSpecials();

        return <<<ENDE
        <h1>$name</h1>
        <p>Preis: $price EUR,-</p>
        <p>Seitenlänge: $sidelength cm</p>
        <p>Fläche: $area cm²</p>
        <p>Extras: $specials</p>
        <hr>
ENDE;
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
            'sidelength' => $this->sidelength,
            'area' => $this->getArea(),
            'specials' => $this->specials

        ];
        return $rv;
    }
}