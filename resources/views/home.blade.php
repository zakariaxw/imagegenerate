@extends('layouts.main')

@section('content')
    <!-- Loader Start -->
    <div class="loader">
        <div class="loader__container">
            <div class="loader-content">
                <div class="loader-logo fadeIn">
                    <!-- Your Logo Here -->
                    <img src="{{ asset('home/img/Z.png') }}" alt="Unio - Coming Soon & Landing Page Template">
                </div>
            </div>
        </div>
        <div class="loader__darkscreen"></div>
    </div>
    <!-- Loader End -->

    <!-- Header Start -->
    <header class="header">

        <!-- Logo Start -->
        <div class="header__logo">
            <!-- Your Logo Here -->
            <img src="{{ asset('home/img/Z.png') }}" alt="">
        </div>
        <!-- Logo End -->

        <!-- Menu Trigger Start -->
        <div class="menu-button">
            <a href="#0" id="menu-trigger" class="menu-trigger"><span></span></a>
        </div>
        <!-- Menu Trigger End -->

        <!-- Desktop Socials Start -->
        <div class="socials socials-desktop">
            <ul>
                <li>
                    <a href="https://www.facebook.com/" target="_blank">Fb</a>
                </li>
                <li>
                    <a href="https://www.instagram.com/" target="_blank">In</a>
                </li>

            </ul>
        </div>
        <!-- Desktop Socials End -->

    </header>
    <!-- Header End -->

    <!-- Navigation Start -->
    <nav id="menu" class="menu">
        <div class="container-fluid p-0 fullheight">
            <div class="row g-0 fullheight">

                <!-- Menu Navigation Block Start -->
                <div class="col-12 col-xl-6 menu__navigation">
                    <div class="navigation-container">
                        <!-- Navigation links -->
                        <ul class="navigation">
                            <li>
                                <a href="#" id="home-trigger" class="navigation__item">
                                    <span class="subtitle">Welcome</span>
                                    <span class="link">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" id="about-trigger" class="navigation__item">
                                    <span class="subtitle">Think Now</span>
                                    <span class="link">Generate</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" id="about-trigger" class="navigation__item">
                                    <span class="subtitle">Something new</span>
                                    <span class="link">About us</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
               

            </div>
        </div>
    </nav>
    <!-- Navigation End -->

    <!-- Main Section Start -->
    <section id="main" class="main">

        <!-- Main Section Content Start -->
        <div class="main__content">
            <div class="container-fluid p-0 fullheight">
                <div class="row g-0 fullheight">

                    <!-- Main Section Intro Start -->
                    <div class="col-12 col-xl-6 main__intro">
                        <div class="intro__content">

                            <!-- Headline Start -->
                            <div id="headline" class="headline">
                                <!-- Animated Headline Start -->
                                <h1 class="headline__title animated-headline white-cursor">
                                    Hello! I'm<br>
                                    <span id="typed-strings">
                                        <b>Zakaria</b>
                                        <b>Full stack Web Developer</b>
                                        <b>Designer</b>
                                    </span>
                                    <span id="typed" class="gradient-text"></span>
                                </h1>
                                <!-- Animated Headline End -->
                                <p class="headline__text">This my first Website For generating image using OpenAI Api.
                                    Enjoy!</p>
                                <div class="headline__btnholder">

                                    <a href="{{ route('index') }}"  class="btn btn-l btn-outline">
                                        <span class="btn-border"></span>
                                        <span class="btn-hover"></span>
                                        <span class="btn-caption">Generate Now</span>
                                    </a>
                                </div>
                            </div>
                            <!-- Headline End -->

                       
                        </div>
                    </div>
                    <!-- Main Section Intro End -->

                    <!-- Main Section Media Start -->
                    <div class="col-12 col-xl-6 main__media">
                        <div class="main__darkscreen"></div>
                        <div class="media__content">

                            <!-- Main Section Split Image Background Start -->
                            <div class="media__image media-image-3">
                                <img src="{{ asset('home/img/back.png') }}" alt="">
                            </div>
                            <!-- Main Section Split Image Background End -->

                            <!-- Main Section Color Gradient Layer Start -->
                            <div class="color-layer color-layer-dark"></div>
                            <!-- Main Section Color Gradient Layer End -->

                            <!-- Background Effect Start -->
                            <div id="particles-js"></div>
                            <!-- Background Effect End -->

                            <!-- Main Section Countdown Start -->
                            <div class="media__countdown">
                                <!-- Countdown Start-->

                                <!-- Countdown End-->
                            </div>
                            <!-- Main Section Countdown End -->

                            <!-- Main Section Copyright Start -->
                            <div class="media__copyright">
                                <p><a href="https://themeforest.net/user/mix_design/portfolio" class="light"
                                        target="_blank">Zakaria Akrabou</a> 2023<br>all rights reserved</p>
                            </div>
                            <!-- Main Section Copyright Start -->

                        </div>
                    </div>
                    <!-- Main Section Media End -->

                    <!-- Mobile Socials Start -->
                    <div class="socials socials-mobile">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">Fb</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">In</a>
                            </li>

                        </ul>
                    </div>
                    <!-- Mobile Socials End -->

                </div>
            </div>
        </div>
        <!-- Main Section Content End -->

    </section>
    <!-- Main Section End -->


    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe.
        It's a separate element, as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                   
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>
@endsection
