<?php


class DB_Functions
{
    private $conn;
    private $db;

    // constructor
    function __construct()
    {
        require_once 'DB_Connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->conn = $this->db->connect();
    }
    function AddPsix($name,$phone,$date_born)
    {
        $stmt = $this->conn->prepare("INSERT INTO `human`(`name`, `phone`,`date_born`) VALUES (?,?, ?)");
        $result = $stmt->execute(Array($name,$phone,$date_born));
        if($result) return true;
        return false;
    }
    function UpdatePsix($id,$name,$phone,$date_born)
    {
        $stmt = $this->conn->prepare("UPDATE `human` SET `name`=?,`phone`=?,`date_born`=? WHERE `id_human`=?");
        $result = $stmt->execute(Array($name,$phone,$id,$date_born));
        if($result) return true;
        return false;
    }
    function getPsix()
    {
        $stmt = $this->conn->prepare("SELECT * FROM human");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function delPsix($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM human WHERE id_human=?");
        return $stmt->execute(Array($id));

    }
    function __destruct()
    {
        $this->db=null;
    }
    function getPsixById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM human WHERE id_human=?");
        $stmt->execute(Array($id));
        return $stmt->fetch();
    }
    function getDiagnozAll()
    {
        $stmt = $this->conn->prepare("SELECT * FROM diagnoz");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}