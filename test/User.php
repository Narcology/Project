<?php
/**
 * Created by Voronina Elena.
 * User: 208-u-07
 * Date: 27.05.2019
 * Time: 14:01
 */

class User
{
private $id_user;
private $login;
private $password;
private $salt;

    /**
     * User constructor.
     * @param $id_user
     * @param $login
     * @param $password
     * @param $salt
     */
    public function __construct($id_user, $login, $password, $salt)
    {
        $this->id_user = $id_user;
        $this->login = $login;
        $this->password = $password;
        $this->salt = $salt;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @param mixed $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }
}