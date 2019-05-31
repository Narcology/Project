<?php
/**
 * Created by Voronina Elena.
 * User: 208-u-07
 * Date: 27.05.2019
 * Time: 12:51
 */
class DB_Functions
{
    private $conn;
    private $db;
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $this->db = new Db_Connect();
        $this->conn = $this->db->connect();
    }
        //список пользователей
    public function storeUser($login,$password)
    {
        $hash = $this->hashSSHA($password);
        $encrypted_password = $hash["encrypted"]; // пароль под шифром
        $salt = $hash["salt"]; // соль

        $stmt = $this->conn->prepare("INSERT INTO users(login,password,salt) VALUES(?, ?, ? )");
        $stmt->bind_param("sss", $login,$encrypted_password, $salt);
        $result = $stmt->execute();
        $stmt->close();

        if ($result) {
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE login = ?");
            $stmt->bind_param("s", $login);
            $stmt->execute();
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();

            return $user;
        } else {
            return false;
        }
    }
    //проверка на завершение сессии
    public function isUserExisted($login) {
        $stmt = $this->conn->prepare("SELECT login  FROM users WHERE login = ?");

        $stmt->bind_param("s", $login);

        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // пользователь вышел
            $stmt->close();
            return true;
        } else {
            // пользователь не вышел
            $stmt->close();
            return false;
        }
    }
        //получить логины и пароли пользователей
    public function getUserByLoginAndPassword($login, $password)
    {

        $stmt = $this->conn->prepare("SELECT * FROM users WHERE login = ?");

        $stmt->bind_param("s", $login);

        if ($stmt->execute()) {
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();


            $salt = $user['salt'];
            $encrypted_password = $user['password'];
            $hash = $this->checkhashSSHA($salt, $password);

            if ($encrypted_password == $hash) {

                return $user;
            }
        } else {
            return NULL;
        }
    }
    //хеш пароля
    public function hashSSHA($password) {

        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }
    //проверка хеша пароля
    public function checkhashSSHA($salt, $password) {

        $hash = base64_encode(sha1($password . $salt, true) . $salt);

        return $hash;
    }
}