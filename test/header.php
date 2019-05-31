<?php
include_once 'DB_Functions.php';
if (isset($_COOKIE['time'])) session_start();
$_SESSION['login'] = $_COOKIE["login"];
$name=$_SESSION['login'];
?>

<header>
    <div class="main wrap">
        <h1><a href="index.php"><img src="images/logo.png" alt=""></a></h1>
        <p>4012, Калининград,Калиниградская область <span>8-(911)-111-1111</span></p>
    </div>
    <nav>
        <ul class="menu">
            <li class="current"><a href="index.php" class="home"><img src="images/home.jpg" alt=""></a></li>
            <li><a href="about.html">О нас</a></li>
            <li><a href="maintenance.html">Гайд</a></li>
            <li><a href="repair.html">Ремонт</a></li>
            <li><a href="price-list.html">Цены</a></li>
            <li><a href="locations.html">Пункты ремонта</a></li>
            <li><a href="/login/index.html">Авторизация/Регистрация</a></li>
        </ul>
        <div class="clear"></div>
    </nav>
</header>
