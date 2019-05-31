<?php


class Diagnoz
{
private $id_diagnoz;
private $name;
private $ill;
private $date_firtsill;
private $date_lastill;
private $id_uslugi;
private $id_doctor;

    /**
     * Diagnoz constructor.
     * @param $id_diagnoz
     * @param $name
     * @param $ill
     * @param $date_firtsill
     * @param $date_lastill
     * @param $id_uslugi
     * @param $id_doctor
     */
    public function __construct($id_diagnoz, $name, $ill, $date_firtsill, $date_lastill, $id_uslugi, $id_doctor)
    {
        $this->id_diagnoz = $id_diagnoz;
        $this->name = $name;
        $this->ill = $ill;
        $this->date_firtsill = $date_firtsill;
        $this->date_lastill = $date_lastill;
        $this->id_uslugi = $id_uslugi;
        $this->id_doctor = $id_doctor;
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
    public function getDateFirtsill()
    {
        return $this->date_firtsill;
    }

    /**
     * @param mixed $date_firtsill
     */
    public function setDateFirtsill($date_firtsill)
    {
        $this->date_firtsill = $date_firtsill;
    }

    /**
     * @return mixed
     */
    public function getDateLastill()
    {
        return $this->date_lastill;
    }

    /**
     * @param mixed $date_lastill
     */
    public function setDateLastill($date_lastill)
    {
        $this->date_lastill = $date_lastill;
    }

    /**
     * @return mixed
     */
    public function getIdUslugi()
    {
        return $this->id_uslugi;
    }

    /**
     * @param mixed $id_uslugi
     */
    public function setIdUslugi($id_uslugi)
    {
        $this->id_uslugi = $id_uslugi;
    }

    /**
     * @return mixed
     */
    public function getIdDoctor()
    {
        return $this->id_doctor;
    }

    /**
     * @param mixed $id_doctor
     */
    public function setIdDoctor($id_doctor)
    {
        $this->id_doctor = $id_doctor;
    }
}