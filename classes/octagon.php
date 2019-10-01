<?php

require_once('room.php');


class octagon extends room {
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
        <p>$price</p>
        <p>$sidelength</p>
        <p>$area</p>
        <p>$specials</p>
ENDE;
    }


}