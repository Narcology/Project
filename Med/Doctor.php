<?php
/**
 * Created by PhpStorm.
 * User: 208-u-07
 * Date: 24.05.2019
 * Time: 10:17
 */

class Doctor
{
    private $id_doctor;
    private $name;
    private $phone;
    private $id_human;

    /**
     * Doctor constructor.
     * @param $id_doctor
     * @param $name
     * @param $phone
     * @param $id_human
     */
    public function __construct($id_doctor, $name, $phone, $id_human)
    {
        $this->id_doctor = $id_doctor;
        $this->name = $name;
        $this->phone = $phone;
        $this->id_human = $id_human;
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
    public function getIdHuman()
    {
        return $this->id_human;
    }

    /**
     * @param mixed $id_human
     */
    public function setIdHuman($id_human)
    {
        $this->id_human = $id_human;
    }
}