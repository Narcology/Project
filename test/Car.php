<?php
/**
 * Created by Voronina Elena.
 * User: 208-u-07
 * Date: 27.05.2019
 * Time: 13:19
 */

class Car
{
private $id_car;
private $name;
private $model;
private $number;
private $price;
private $date_buy;
private $id_user;

    /**
     * Car constructor.
     * @param $id_car
     * @param $name
     * @param $model
     * @param $number
     * @param $price
     * @param $date_buy
     * @param $id_user
     */
    public function __construct($id_car, $name, $model, $number, $price, $date_buy, $id_user)
    {
        $this->id_car = $id_car;
        $this->name = $name;
        $this->model = $model;
        $this->number = $number;
        $this->price = $price;
        $this->date_buy = $date_buy;
        $this->id_user = $id_user;
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
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
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

    /**
     * @return mixed
     */
    public function getDateBuy()
    {
        return $this->date_buy;
    }

    /**
     * @param mixed $date_buy
     */
    public function setDateBuy($date_buy)
    {
        $this->date_buy = $date_buy;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }
}