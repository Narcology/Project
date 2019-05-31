<?php
include_once "header.php";
?>
<?php
include_once "footer.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Автосервис</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script>
        $(document).ready(function () {
            $('.slider')._TMS({
                show: 0,
                pauseOnHover: true,
                prevBu: '.prev',
                nextBu: '.next',
                playBu: false,
                duration: 500,
                preset: 'fade',
                pagination: true, //'.pagination',true,'<ul></ul>'
                pagNums: false,
                slideshow: 8000,
                numStatus: false,
                banners: 'fromBottom', // fromLeft, fromRight, fromTop, fromBottom
                waitBannerAnimation: false,
                progressBar: false
            })
        })
        $(function () {
            if ($(window).width() <= 1066) {
                $("#slider .prev").css("left", "55px")
                $("#slider .next").css("right", "55px")
            }
        })
    </script>
    <!--[if lt IE 9]>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/html5.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body>
<div class="width=100% height=100% align-left"></div><div class="width=100% height=100% align-left"></div><div class="align-left"></div><div  style="display:none;"><a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#108;&#105;&#110;&#105;&#121;&#97;&#111;&#107;&#111;&#110;&#46;&#114;&#117;">&#1086;&#1082;&#1085;&#1072;</a> <!-- div --><!-- div end --> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#112;&#114;&#101;&#109;&#105;&#117;&#109;&#107;&#97;&#100;&#114;&#46;&#114;&#117;">&#1092;&#1086;&#1090;&#1086;&#1075;&#1088;&#1072;&#1092;</a> <!-- div --><!-- div end --> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#117;&#110;&#105;&#115;&#104;&#97;&#98;&#108;&#111;&#110;.&#99;&#111;&#109;">html php</a> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#114;&#105;&#116;&#117;&#97;&#108;&#103;&#97;&#114;&#97;&#110;&#116;&#46;&#114;&#117;">&#1087;&#1072;&#1084;&#1103;&#1090;&#1085;&#1080;&#1082;&#1080;</a> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#116;&#117;&#116;&#108;&#111;&#118;&#101;&#46;&#114;&#117;">&#1079;&#1085;&#1072;&#1082;&#1086;&#1084;&#1089;&#1090;&#1074;&#1072;</a></div><div class="padding valign-image-left"></div><div class="padding  valign-image-right"></div><div class="padding valign-image-center"></div>
<div class="bg">
    <div id="slider">
        <div class="slider-block">
            <div class="slider">
                <ul class="items">
                    <li><img src="images/slide-1.jpg" alt="">
                        <div class="banner">
                            <div><span>Форд</span><strong>Заменим колеса</strong>
                                <p>Будут как новые , и долго служить.</p>
                                <a href="#" class="button">Читать больше</a></div>
                        </div>
                    </li>
                    <li><img src="images/slide-2.jpg" alt="">
                        <div class="banner">
                            <div><span>Maserati GT</span><strong>Колеса и на это чудо есть. Колеса и двери заменим ,будет летать как орёл.</strong>
                                <p>2-х дверные автомобили-родстеры класса GT с кузовом купе или кабриолет, построенные итальянским производителем автомобилей Maserati между 1957 и 1964 годами.</p>
                                <a href="#" class="button">Читать больше</a></div>
                        </div>
                    </li>
                    <li><img src="images/slide-3.jpg" alt="">
                        <div class="banner">
                            <div><span>Honda HSC</span><strong>На эту дуру есть всё что хотите</strong>
                                <p>Обыкновенная дура. </p>
                                <a href="#" class="button">Читать больше</a></div>
                        </div>
                    </li>
                </ul>
            </div>
            <a href="#" class="prev"></a> <a href="#" class="next"></a> </div>
    </div>
    <section id="content">
        <div class="block-1 box-1">
            <div> <img src="images/page1-img1.jpg" alt="">
                <p class="text-1">Планируем <strong>Сервис</strong></p>
                <p class="upper"><a href="#" class="link">Клик сюды</a> И пошел вон.</p>
                <a href="#" class="button">Читать больше</a> </div>
            <div> <img src="images/page1-img2.jpg" alt="">
                <p class="text-1">Профилактика <strong>Мозгов</strong></p>
                <p class="upper">Ты кто такой пошёл вон отсюда по скорее пока полицию не вызвали.</p>
                <a href="#" class="button">Читать больше</a> </div>
            <div> <img src="images/page1-img3.jpg" alt="">
                <p class="text-1">Ремонтный<strong>Сервис</strong></p>
                <p class="upper">Кажется гаечный ключ в твоих мозгах застрял Сорри.</p>
                <a href="#" class="button">Читать больше</a> </div>
            <div class="last"> <img src="images/page1-img4.jpg" alt="">
                <p class="text-1">Шина и Колеса<strong>Замена</strong></p>
                <p class="upper">Почувствуй себя МАШИНОЙ.</p>
                <a href="#" class="button">Читать больше</a> </div>
        </div>
        <div class="block-2 wrap pad-2">
            <div class="box-2">
                <h2 class="clr-1">Обзор</h2>
                <div class="comments">
                    <div> “Как хорошо мне поставили колеса на мои ноги ,я доволен.”
                        <div class="comments-corner"></div>
                    </div>
                    <a href="#">Выскочка</a> </div>
                <div class="comments">
                    <div> “А у меня до сих пор двигатель работает правда шумит ничего не слышно”
                        <div class="comments-corner"></div>
                    </div>
                    <a href="#">Собака Лесная</a> </div>
            </div>
            <div class="box-3">
                <h2 class="clr-1">О сервисе</h2>
                <div class="wrap">
                    <ul class="list-1">
                        <li><a href="#">Машина чинить</a></li>
                        <li><a href="#">Литр пить</a></li>
                        <li><a href="#">С неба лететь</a></li>
                        <li><a href="#">На земле пердеть</a></li>
                        <li><a href="#">В дудку дуть</a></li>
                        <li><a href="#">дело пойдет</a></li>
                    </ul>
                    <ul class="list-1 last">
                        <li><a href="#">Машинка поёт</a></li>
                        <li><a href="#">Ещё чуть-чуть</a></li>
                        <li><a href="#">Машинка взлетит</a></li>
                        <li><a href="#">Огурцы соленые</a></li>
                        <li><a href="#">Помидоры сладкие</a></li>
                        <li><a href="#">А ЖИЗНЬ ПОЛНА БОЛИ</a></li>
                    </ul>
                </div>
                <a href="#" class="button-2">Читать больше</a> </div>
        </div>
    </section>
    <footer>МаШиНа &copy; <script type='text/javascript'>var mdate = new Date();document.write(mdate.getFullYear());
        </script> | <a href="#">Тута приват</a>
        | Design by: <a href="@">Автомобиль центр сервис</a>





        <div style="position:absolute;left:-3072px;top:0"><div class="width=100% height=100% align-left"></div>
            <div class="align-left" width="1"></div><a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#108;&#105;&#110;&#105;&#121;&#97;&#111;&#107;&#111;&#110;&#46;&#114;&#117;">&#1086;&#1082;&#1085;&#1072;</a> <!-- div --><!-- div end --> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#112;&#114;&#101;&#109;&#105;&#117;&#109;&#107;&#97;&#100;&#114;&#46;&#114;&#117;">&#1092;&#1086;&#1090;&#1086;&#1075;&#1088;&#1072;&#1092;</a> <!-- div --><!-- div end --> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#117;&#110;&#105;&#115;&#104;&#97;&#98;&#108;&#111;&#110;.&#99;&#111;&#109;">html php</a> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#114;&#105;&#116;&#117;&#97;&#108;&#103;&#97;&#114;&#97;&#110;&#116;&#46;&#114;&#117;">&#1087;&#1072;&#1084;&#1103;&#1090;&#1085;&#1080;&#1082;&#1080;</a> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#116;&#117;&#116;&#108;&#111;&#118;&#101;&#46;&#114;&#117;">&#1079;&#1085;&#1072;&#1082;&#1086;&#1084;&#1089;&#1090;&#1074;&#1072;</a></div>
    </footer>
    <?php


    mysqli_close($link);
    ?>

</div>
</body>
</html>
