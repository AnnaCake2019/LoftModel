<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/public/images/icons.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://kit.fontawesome.com/b86eb20c1d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/public/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oranienbaum&display=swap" rel="stylesheet">
    <title>Loft Model</title>
</head>
<body>
<header id="HP">
    <div>
        <div>
            <h3><a href="/public">Loft Model</a></h3>
            <p>+7 (951) 686-43-36</p>
        </div>
        <div class="lang">
            <div>
            <img id="ru" src="/public/images/russia.png">
        </div>
{{--            <input type="radio" name="len" value="ru" id="ru">--}}
        <div>
            <img id="en" src="/public/images/united-kingdom.png">
        </div>
{{--            <input type="radio" name="len" value="en" id="en">--}}
        </div>
        <nav>
            <ul class="ru">
                <li class="menuPC"><a href="/public/services">Условия Заказа</a></li>
                <li class="menuPC"><a href="/public/models">Модели</a></li>
{{--                <li class="menuPC"><a href="/public/modelsVip">Vip Зал</a></li>--}}
                <li class="menuPC"><a href="/public/price">Прайс</a></li>
                <li class="menuPC"><a href="/public/vacancy">Вакансии</a></li>
                <li class="menuPC"><a href="/public/contacts">Контакты</a></li>
                <li class="menuPC"><a href="/public/about">О нас</a></li>
            </ul>
            <ul class="en">
                <li class="menuPC"><a href="/public/services">Order Terms</a></li>
                <li class="menuPC"><a href="/public/EnModels">Models</a></li>
{{--                <li class="menuPC"><a href="/public/modelsVip">Vip Hall</a></li>--}}
                <li class="menuPC"><a href="/public/price">Price</a></li>
                <li class="menuPC"><a href="/public/EnVacancy">Jobs</a></li>
                <li class="menuPC"><a href="/public/EnContacts">Contact</a></li>
                <li class="menuPC"><a href="/public/about">About Us</a></li>
            </ul>
        </nav>
        <span id="buttonOpenMenu" class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
    </div>
    <div id="fonMenu" class="forMenuPhoneSlip">
        <ul class="ru">
            <li><p>+7 (951) 686-43-36</p></li>
            <li><a href="/public/services">Условия Заказа</a></li>
            <li><a href="/public/models">Модели</a></li>
{{--            <li><a href="/public/modelsVip">Vip Зал</a></li>--}}
            <li><a href="/public/price">Прайс</a></li>
            <li><a href="/public/vacancy">Вакансии</a></li>
            <li><a href="/public/contacts">Контакты</a></li>
            <li><a href="/public/about">О нас</a></li>
        </ul>
        <ul class="en">
            <li><p>+7 (951) 686-43-36</p></li>
            <li><a href="/public/services">Order Terms</a></li>
            <li><a href="/public/EnModels">Models</a></li>
{{--            <li><a href="/public/modelsVip">Vip Hall</a></li>--}}
            <li><a href="/public/price">Price</a></li>
            <li><a href="/public/EnVacancy">Jobs</a></li>
            <li><a href="/public/EnContacts">Contact</a></li>
            <li><a href="/public/about">About Us</a></li>
        </ul>
    </div>
</header>
</div>


<div class="wra">
<div id="center">


    @yield('content')
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6 firstBlock">
                <i class="fas fa-phone-alt"></i>
                <p>+7 (951) 686-43-36</p>
            </div>
        </div>
        <div class="row">
            <div class="offset-3 col-6 secondBlock">
                <div>
                    <a href="https://tttttt.me/joinchat/AAAAAEd4lfrVS4ysSaN-qA" title="Telegram"><i class="fab fa-telegram-plane tel"></i></a>
                </div>
                <div>
                    <a href="https://instagram.com/loft_model?igshid=1139iivniji2v" title="Instagram"><i class="fab fa-instagram inst"></i></a>
                </div>
                <div>
                    <a href="https://vk.com/id463375512" title="VK"><i class="fab fa-vk vk"></i></a>
                </div>
                <div>
                    <a href="https://wa.me/79190477597?text=" title="WhatsApp"><i class="fab fa-whatsapp wats"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-3 col-6 threeBlock">
                <p>&copy; 2019 Loft Model Agency</p>
                @if(Auth::check())
                    <a class="linkForAdmin" href="/public/admin">Online</a>-
                    <a class="linkForAdmin" href="/public/logout">Logout</a>
                @endif
            </div>
        </div>
    </div>
</footer>
</div>
<script src="/public/js/app.js"></script>
<script src="/public/js/language.js"></script>
</body>
</html>
