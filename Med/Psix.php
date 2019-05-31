<?php
/**
 * Created by PhpStorm.
 * User: 208-u-07
 * Date: 24.05.2019
 * Time: 10:09
 */

class Psix
{
    private $id;
    private $name;
    private $phone;
    private $date_born;

    /**
     * Psix constructor.
     * @param $id
     * @param $name
     * @param $phone
     * @param $date_born
     */
    public function __construct($id, $name, $phone, $date_born)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->date_born = $date_born;
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
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getDateBorn()
    {
        return $this->date_born;
    }

    /**
     * @param mixed $date_born
     */
    public function setDateBorn($date_born)
    {
        $this->date_born = $date_born;
    }
}