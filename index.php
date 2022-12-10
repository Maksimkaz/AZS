<?php
session_start();
include('server.php');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fuel</title>
    <link rel="icon" href="https://yt3.ggpht.com/a/AATXAJwv8osjGBjExEIKfCsDxUbK-xZ5gyOrfB8X0uGRbw=s900-c-k-c0xffffffff-no-rj-mo" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bilbo+Swash+Caps&family=Montserrat:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <nav class="nav">
            <a class="nav__logo">BB</a>
            <a href="#about" class="nav__btn">О нас</a>
            <a href="" class="nav__btn">Топливо</a>
            <a href="#suppl" class="nav__btn">Поставщики</a>
            <?php if(isset($_SESSION['user'])) { ?>
            <li class="nav-item dropdown">
                <a class="nav__btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Аккаунт
                </a>
                <ul class="dropdown-menu">
                <?php 
                if(isset($_SESSION['user']))
                { ?>
                    <li><a href="logout.php" class="dropdown-item" >Выйти</a></li>
                <?php } else {} ?>
                </ul>
            </li>
            <li>
                <form class="d-flex" role="search">
                    <?php 
                    if(isset($_SESSION['user']) && $_SESSION['user']['role'] == 'user') { ?>
                    <a class="btn btn-outline-success" href="zakaz.php" style="color:black; margin-top:20px">Заказ топлива</a>
                    <?php } else {
                    }?>
                </form>
            </li>
            <?php } else { ?>
                <a href="register.php" class="nav__btn auth">Авторизация</a>
            <?php } ?>
            

        </nav>
    </header>
    <main>
        <div class="intro">
            <div class="intro__title title">Автозаправочная станция <br>BestB</div>
            <div class="intro__btn">
                <a href="" class="intro__btn__txt">Просмотреть адреса</a>
            </div>
        </div>
        <div class="container">
            <div class="about">
                <div class="about__title title" id="about">О нас</div>
                <div class="about__cards">
                    <div class="about__cards__card">
                        <img src="img/1.jpg" alt="fuelstn" class="about__cards__card__img">
                        <div class="about__cards__card__title">Лучший сервис<br>в стране</div>
                    </div>
                    <div class="about__cards__card">
                        <img src="img/2.jpg" alt="workers" class="about__cards__card__img">
                        <div class="about__cards__card__title">Лучшие<br>сотрудники</div>
                    </div>
                    <div class="about__cards__card">
                        <img src="img/3.jpg" alt="number1" class="about__cards__card__img">
                        <div class="about__cards__card__title">Номер 1 на рынке<br>в стране</div>
                    </div>
                    <div class="about__cards__card">
                        <img src="img/4.jpg" alt="refueling сфк" class="about__cards__card__img">
                        <div class="about__cards__card__title">Самое чистое<br>топливо</div>
                    </div>
                </div>
            </div>
            <div class="fuel-info">
                <div class="fuel-info__title title" id="fuel-info">Топливо</div>
                <div class="fuel__cards">
                    <div class="fuel__cards__card">
                        <a href="./fuel-info/92.html"><img src="img/92.svg" alt="fuelstn" class="fuel__cards__card__img"></a>
                    </div>
                    <div class="fuel__cards__card">
                        <a href="./fuel-info/95.html"><img src="img/95.svg" alt="workers" class="fuel__cards__card__img"><a >
                    </div>
                    <div class="fuel__cards__card">
                        <a href="./fuel-info/98.html"><img src="img/98.svg" alt="number1" class="fuel__cards__card__img"><a >
                    </div>
                    <div class="fuel__cards__card">
                        <a href="./fuel-info/diesel.html"><img src="img/diesel.svg" alt="refueling" class="fuel__cards__card__img"><a >
                    </div>
                    <div class="fuel__cards__card">
                        <a href="./fuel-info/gas.html"><img src="img/gas.svg" alt="refueling" class="fuel__cards__card__img"><a >

                    </div>
                </div>
            </div>
            <div class="about-suppl">
                <div class="about-suppl__title title" id="suppl">Поставщики</div>
                <div class="about-suppl__suppls">
                    <div class="suppl">
                        <div class="special-img">
                            <a class="suppl__nav"><img src="./img/lukoil.png" alt="lukoil-logo" class="suppl__img"></a>
                        </div>
                        <div class="type-text">Лукойл является одним из лучших поставщиком топлива на заправки в РБ</div>
                    </div>
                    <div class="suppl">
                        <div class="special-img">
                            <a class="suppl__nav"><img src="./img/belneft.jpg" alt="belneft-logo" class="suppl__img"></a>
                        </div>
                        <div class="type-text">Белнефтехим - ведущий поставщик топлива в стране</div>
                    </div>
                    
                </div>
            </div> 
        </div>
        
    </main>
    <footer>
        <nav class="footer-nav">
            <a class="footer-nav__logo">BB</a>
            <a href="" class="nav__btn btn">О нас</a>
            <a href="" class="nav__btn btn">Поставщики</a>
            <a href="" class="nav__btn btn">Топливо</a>
        </nav>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

<script>
        let flag = false;
        document.onkeydown = function(event) {
            if (event.code == 'AltLeft') flag = true;
            if (event.code == 'KeyA' && flag){
                flag = false;
                window.location.href = 'admin.php';
            };
        }
</script> 
</html>