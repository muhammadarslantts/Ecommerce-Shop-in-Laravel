<!DOCTYPE html>
<html lang="en">

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Ecommerce Shop</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/crumina-fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/styles.css') }}">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/primary-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/magnific-popup.css') }}">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="{{ asset('assets/site/rtl.css') }}">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

    @yield('csstoastr')

</head>


<body class=" ">

    <header class="header" id="site-header">

        <div class="container">

            <div class="header-content-wrapper">

                <ul class="nav-add">
                    <li class="cart">

                        <a href="#" class="js-cart-animate">
                            <i class="seoicon-basket"></i>
                            <span
                                class="cart-count total_cart_items">{{ session('cart') ? count(session('cart')) : 0 }}</span>
                        </a>

                        <div class="cart-popup-wrap">
                            <div class="popup-cart">
                                <h4 class="title-cart"><span
                                        class="total_cart_items">{{ session('cart') ? count(session('cart')) : 0 }}</span>
                                    products in the cart!
                                </h4>
                                <p class="subtitle">Please make your choice.</p>
                                <div class="btn btn-small btn--dark">
                                    <span class="text">view all catalog</span>
                                </div>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>

        </div>

    </header>



    {{-- content section start form here --}}

    @yield('content')



    {{-- <div class="content-wrapper">

        <div class="container">
            <div class="row pt120">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="heading align-center mb60">
                        <h4 class="h1 heading-title">E-commerce tutorial</h4>
                        <p class="heading-text">Buy books, and we ship to you.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Books products grid -->

        <div class="container">
            <div class="row pt120">
                <div class="books-grid">

                    <div class="row mb30">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="books-item">
                                <div class="books-item-thumb">
                                    <img src="{{ asset('assets/site/img/product-details.png') }}" alt="book">
                                    <div class="new">New</div>
                                    <div class="sale">Sale</div>
                                    <div class="overlay overlay-books"></div>
                                </div>

                                <div class="books-item-info">
                                    <h5 class="books-title">Presenting Data</h5>

                                    <div class="books-price">$63.00</div>
                                </div>

                                <a href="product-detail.html" class="btn btn-small btn--dark add">
                                    <span class="text">Add to Cart</span>
                                    <i class="seoicon-commerce"></i>
                                </a>

                            </div>
                        </div>


                    </div>

                    <div class="row pb120">

                        <div class="col-lg-12">

                            <nav class="navigation align-center">

                                <a href="#" class="page-numbers bg-border-color current"><span>1</span></a>
                                <a href="#" class="page-numbers bg-border-color"><span>2</span></a>
                                <a href="#" class="page-numbers bg-border-color"><span>3</span></a>
                                <a href="#" class="page-numbers bg-border-color"><span>4</span></a>
                                <a href="#" class="page-numbers bg-border-color"><span>5</span></a>

                                <svg class="btn-prev">
                                    <use xlink:href="#arrow-left"></use>
                                </svg>
                                <svg class="btn-next">
                                    <use xlink:href="#arrow-right"></use>
                                </svg>

                            </nav>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Footer -->

    <footer class="footer">
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    </div>
                </div>
            </div>
        </div>
    </footer>


    @yield('scripts')
    <script src="{{ asset('assets/site/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/crum-mega-menu.js') }}"></script>
    <script src="{{ asset('assets/site/js/swiper.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/theme-plugins.js') }}"></script>
    <script src="{{ asset('assets/site/js/main.js') }}"></script>
    <script src="{{ asset('assets/site/js/form-actions.js') }}"></script>

    <script src="{{ asset('assets/site/js/velocity.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/animation.velocity.min.js') }}"></script>

    <!-- ...end JS Script -->


</body>

</html>
