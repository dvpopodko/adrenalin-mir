<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Адреналин-Мир</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    @vite(['resources/css/app.css'])
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Section Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="fa fa-close"></i>
    </div>
    <div class="canvas-search search-switch">
        <i class="fa fa-search"></i>
    </div>
    <nav class="canvas-menu mobile-menu">
        <ul>
            <li @if($url === 'home') class="active" @endif><a href="../home">Главная</a></li>
            <li @if($url === 'about-us') class="active" @endif><a href="../about-us">О нас</a></li>
            <li @if($url === 'classes') class="active" @endif><a href="classes">Тренировки</a></li>
            <li @if($url === 'services') class="active" @endif><a href="services">Услуги</a></li>
            <li @if($url === 'team') class="active" @endif><a href="team">Наша команда</a></li>
            <li><a href="#">Старницы(AdmOnly)</a>
                <ul class="dropdown">
                    <li><a href="about-us">О нас</a></li>
                    <li><a href="class-timetable">Расписание тренировок</a></li>
                    <li><a href="mi-calculator">BMI расчет</a></li>
                    <li><a href="team">Наша команда</a></li>
                    <li><a href="gallery">Галлерея</a></li>
                    <li><a href="blog">Наш блог</a></li>
                    <li><a href="404">404</a></li>
                </ul>
            </li>
            <li><a href="contact">Контакты</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="canvas-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>

    </div>
</div>
<!-- Offcanvas Menu Section End -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="../home">
                        <img src="../img/adrenalin_logo_vector.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="nav-menu">
                    <ul>
                        <li @if($url === 'home') class="active" @endif><a href="../home">Главная</a></li>
                        <li @if($url === 'about-us') class="active" @endif><a href="../about-us">О нас</a></li>
                        <li @if($url === 'class-details') class="active" @endif><a href="../class-details">Тренировки</a></li>
                        <li @if($url === 'services') class="active" @endif><a href="../services">Услуги</a></li>
                        <li @if($url === 'team') class="active" @endif><a href="../team">Наша команда</a></li>
                        <li><a href="#">Старницы</a>
                            <ul class="dropdown">
                                <li><a href="../about-us">О нас</a></li>
                                <li><a href="../class-timetable">Расписание занятий</a></li>
                                <li><a href="../bmi-calculator">BMI калькулятор</a></li>
                                <li><a href="../team">Наша команда</a></li>
                                <li><a href="../gallery">Галереня</a></li>
                                <li><a href="../blog">Блоги</a></li>
                                <li><a href="../404">404</a></li>
                            </ul>
                        </li>
                        <li><a href="contact">Контакты</a></li>
                        @auth
                        <li><a href="../myprofile">Мой Профиль</a></li>
                        @endauth
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="top-option">
                    <div class="to-search search-switch">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="to-social to-search">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>

                    </div>
                    @auth
                        <div class="to-social">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" style="background: none; border: none;">
                                    <i class="fa fa-sign-out"></i>
                                </button>
                            </form>
                        </div>
                    @else
                        <div class="to-social ">
                            <a href="../login"><i class="fa fa-sign-in"></i></a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
        <div class="canvas-open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header End -->

@yield('content')

<!-- Get In Touch Section Begin -->
<div class="gettouch-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="gt-text">
                    <i class="fa fa-map-marker"></i>
                    <p>Минск, Братская 14<br/>220065</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text">
                    <i class="fa fa-mobile"></i>
                    <ul>
                        <li>125-711-811</li>
                        <li>125-668-886</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text email">
                    <i class="fa fa-envelope"></i>
                    <p>Support.gymcenter@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Get In Touch Section End -->

<!-- Footer Section Begin -->
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="fs-about">
                    <div class="fa-logo">
                        <a href="#"><img src="img/adrenalin_logo_vector.svg" alt=""></a>
                    </div>
                    <p>ООО "ЭстетикФит" Зарегистрировано Мингорисполкомом за №193790517, 19.09.2024 г.
                        Адрес: г. Минск, ул. Братская, 14 пом. 109</p>
                    <div class="fa-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa  fa-envelope-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="fs-widget">
                    <h4>Useful links</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Classes</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="fs-widget">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">My account</a></li>
                        <li><a href="#">Subscribe</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="fs-widget">
                    <h4>Tips & Guides</h4>
                    <div class="fw-recent">
                        <h6><a href="#">Physical fitness may help prevent depression, anxiety</a></h6>
                        <ul>
                            <li>3 min read</li>
                            <li>20 Comment</li>
                        </ul>
                    </div>
                    <div class="fw-recent">
                        <h6><a href="#">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                        <ul>
                            <li>3 min read</li>
                            <li>20 Comment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="copyright-text">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section End -->

<!-- Search model Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
@vite('resources/js/app.js')
@vite('resources/js/amirJS/jquery.magnific-popup.min.js')
@vite('resources/js/amirJS/masonry.pkgd.min.js')
@vite('resources/js/amirJS/jquery.barfiller.js')
@vite('resources/js/amirJS/jquery.slicknav.js')
@vite('resources/js/amirJS/owl.carousel.min.js')
@vite('resources/js/amirJS/main.js')


</body>
</html>
