<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taekwondo - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script
        src="{{asset('https://code.jquery.com/jquery-3.3.1.js')}}"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>
</head>
<body>
<div class="header">
    <div class="wrapper">
        <div class="header__background">
            <div class="header__wrapper">
                <div class="header__logo">
                    <a href="/" class="header__logo-link">
                        <img src="/images/svg/Logo.svg" alt="Taekwondo" class="header__logo-pic">
                    </a>
                </div>
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="/" class="header__link">HOME</a>
                        </li>
                        <li class="header__item">
                            <a href="#" class="header__link">TRAINING</a>
                        </li>
                        <li class="header__item">
                            <a href="/feedbacks" class="header__link">FEEDBACKS</a>
                        </li>
                        <li class="header__item">
                            <a href="/gallery" class="header__link">GALLERY</a>
                        </li>
                        <li class="header__item">
                            <a href="/contacts" class="header__link">CONTACTS</a>
                        </li>
                    </ul>
                    <div class="header__nav-close">
                        <span class="header__nav-close-line"></span>
                        <span class="header__nav-close-line"></span>
                    </div>
                </nav>
                <div class="header__burger burger">
                    <span class="burger__line burger__line__first"></span>
                    <span class="burger__line burger__line__second"></span>
                    <span class="burger__line burger__line__third"></span>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('content')
<footer class="footer">
    <div class="wrapper">
        <div class="footer__background">
            <div class="footer__wrapper">
                <div class="footer__article">
                    <div class="bottom__article__item">м. Дніпро, вул Драгоманова 154.</div>
                    <div class="bottom__article__item">+38 067 588 79 87</div>
                    <div class="bottom__article__item">+38 050 225 48 89</div>
                </div>
                <div class="footer__article">
                    <div class="footer__article__item">
                        <img src="{{asset('images/png/logos_links.png')}}" usemap="#bottom_links" alt="Taekwondo">
                        <map name="bottom_links">
                            <area shape="rect" coords="0,0,83,83" href="http://itf-ua.org/"
                                  alt="http://itf-ua.org/">
                            <area shape="rect" coords="83,0,166,83" href="http://eitf-taekwondo.org/"
                                  alt="http://eitf-taekwondo.org/">
                            <area shape="rect" coords="166,0,249,83" href="https://itfeurope.org/"
                                  alt="https://itfeurope.org/">
                            <area shape="rect" coords="249,0,347,83" href="https://www.itftkd.sport/"
                                  alt="https://www.itftkd.sport/">
                            <area shape="rect" coords="247,0,430,83" href="http://www.itf-tkd.org/"
                                  alt="http://www.itf-tkd.org/">
                        </map>
                    </div>
                    <div class="footer__article__item">
                        <img src="{{asset('images/png/social_networks.png')}}" usemap="#social_links" alt="social networks">
                        <map name="social_links">
                            <area shape="circle" coords="54,52,24" href="http://facebook.com/"
                                  alt="http://facebook.com/">
                            <area shape="circle" coords="164,52,30" href="https://twitter.com/"
                                  alt="https://twitter.com/">
                            <area shape="circle" coords="293,52,30" href="https://www.linkedin.com/"
                                  alt="https://www.linkedin.com/">
                        </map>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">Taekwondo &#169 2021</div>
</footer>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
