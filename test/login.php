<?php
include_once "DB_Functions.php";
$db=new DB_Functions();

if(isset($_POST["login"])&&isset($_POST['pass']))
{
    $login=htmlentities($_POST["login"]);
    $pass=htmlentities($_POST["pass"]);
    $res=$db->getUserByLoginAndPassword($login,$pass);
    if($res==NULL)
    {
        header("Location: login/index.html");
    }
    else
    {
        $name=$res["login"];
        setcookie("login", $name,"", "/");
        setcookie("time", $name, time()+3600, "/");
        header("Location:index.php");
    }
}
