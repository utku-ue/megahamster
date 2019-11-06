<?php
namespace SooS\megahamster;


/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 01.10.2019
 * Time: 12:37
 */

abstract class room implements \JsonSerializable
{
    protected $name;
    protected $price;
    protected $specials;

    /**
     * room constructor.
     * @param $name
     * @param $price
     * @param $specials
     */
    public function __construct($name, $price, $specials)
    {
        $this->name = $name;
        $this->price = $price;
        $this->specials = $specials;
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

    /**
     * @return mixed
     */
    public function getSpecials()
    {
        return $this->specials;
    }

    public abstract function toHTML():string;
    public abstract function getArea():float;
    public abstract function jsonSerialize();

}