<?php
/**
 * Created by PhpStorm.
 * User: 208-u-07
 * Date: 24.05.2019
 * Time: 10:21
 */

class Uslugi
{
private $id_uslugi;
private $name;
private $ill;
private $price;

    /**
     * Uslugi constructor.
     * @param $id_uslugi
     * @param $name
     * @param $ill
     * @param $price
     */
    public function __construct($id_uslugi, $name, $ill, $price)
    {
        $this->id_uslugi = $id_uslugi;
        $this->name = $name;
        $this->ill = $ill;
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
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getIll()
    {
        return $this->ill;
    }

    /**
     * @param mixed $ill
     */
    public function setIll($ill)
    {
        $this->ill = $ill;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
}