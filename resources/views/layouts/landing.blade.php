<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <div id="fb-root"></div>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <header>
        <div class="custom-container d-flex">
            <a href="/" class="logo">
                <img src="/assets/img/logo.svg" alt="logotype">
            </a>
            <div class="menu" :class="{'show': showMenu}">
                <ul>
                    <li>
                        <a @click="showMenu = false" href="#stack" class="custom-link">Stack</a>
                    </li>
                    <li>
                        <a @click="showMenu = false" href="#expertise" class="custom-link">Expertise</a>
                    </li>
                    <!--                        <li><a @click="showMenu = false" href="#projects" class="custom-link">Projects</a></li>-->
                    <li class="only-mobile">
                        <a class="custom-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="buttons">
                <a class="custom-button custom-outline-button violet contact-us-button" href="#contact-us">Contact Us</a>
                <div class="hamburger classic" @click="toggleMenu" :class="{'is-active': showMenu}" >
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('contents')
    </main>
    <footer>
        <div class="custom-container">
            <div class="info-block">
                <div class="logo">
                    <img src="/assets/img/logo.svg" alt="">
                </div>
                <div class="copyright">
                    <p>2022 © Smartdatatech</p>
                </div>
            </div>
            <div class="menu-block">
                <div class="links">
                    <div class="links-title">
                        <h6>Menu</h6>
                    </div>
                    <ul>
                        <li><a class="custom-link" href="#">Stack</a></li>
                        <li><a class="custom-link" href="#">Expertise</a></li>
                        <!--                            <li><a class="custom-link" href="#">Projects</a></li>-->
                    </ul>
                </div>
                <div class="contacts">
                    <div class="contacts-title">
                        <h6>Contact Us</h6>
                    </div>
                    <ul>
                        <li><p>Hungary, 1085 Budapest, József krt 69. fszt 1.</p></li>
                        <li><a class="custom-link" href="mailto:support@smartdatatech.io">support@smartdatatech.io</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright-block">
                <p>2022 © Smartdatatech</p>
            </div>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"></script>
<script>
    let typed = new Typed(".typed", {
        strings: ["Marketing Digital Software Development", "Development Digital Marketing Software", "Development Digital Marketing Software"],
        typeSpeed: 50,
        backSpeed: 50,
        backDelay: 800,
        startDelay: 500,
        loop: true,
        showCursor: false,
    });
    let swiper = new Swiper(".mySwiper", {
        slidesPerView: "auto",
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
</body>
</html>
