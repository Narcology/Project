<?php
include_once "DB_Functions.php";
$db=new DB_Functions();
if(isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['id'])&&isset($_POST['date_born']))
{

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $id=$_POST['id'];
    $date_born=$_POST['date_born'];
    $result=$db->UpdatePsix($id,$name,$phone,$date_born);
    if($result) header("Location:MedSite.php");
}