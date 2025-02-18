<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Maveson Enterprise') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/stroyka/stroyka.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/photoswipe/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/photoswipe/default-skin/default-skin.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">

</head>

<body>
    <!-- site -->
    <div class="site">
        <!-- mobile site__header -->
        <header class="site__header d-lg-none">
            <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
            <div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
                <div class="mobile-header__panel">
                    <div class="container">
                        <div class="mobile-header__body">
                            <button class="mobile-header__menu-button">
                                <svg width="18px" height="14px">
                                    <use xlink:href="images/sprite.svg#menu-18x14"></use>
                                </svg>
                            </button>
                            <a class="mobile-header__logo" href="index.html">
                            <!-- mobile-logo --> 
                                <img src="{{ asset('images/logos/log1.png') }}" width="120px" height="30px" style="">
                            <!-- mobile-logo / end -->
                            </a>
                            <div class="search search--location--mobile-header mobile-header__search">
                                <div class="search__body">
                                    <form class="search__form" action="#">
                                        <input class="search__input" name="search" placeholder="Search over 10,000 products" aria-label="Site search" type="text" autocomplete="off">
                                        <button class="search__button search__button--type--submit" type="submit">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#search-20"></use>
                                            </svg>
                                        </button>
                                        <button class="search__button search__button--type--close" type="button">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#cross-20"></use>
                                            </svg>
                                        </button>
                                        <div class="search__border"></div>
                                    </form>
                                    <div class="search__suggestions suggestions suggestions--location--mobile-header">
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-header__indicators">
                                <div class="indicator indicator--mobile-search indicator--mobile d-md-none">
                                    <button class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#search-20"></use>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="indicator indicator--mobile d-sm-flex d-none">
                                    <a href="wishlist.html" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#heart-20"></use>
                                            </svg>
                                            <span class="indicator__value">0</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="indicator indicator--mobile">
                                    <a href="cart.html" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#cart-20"></use>
                                            </svg>
                                            <span class="indicator__value">3</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile site__header / end -->
        
        <!-- mobilemenu -->
        <div class="mobilemenu">
            <div class="mobilemenu__backdrop"></div>
            <div class="mobilemenu__body">
                <div class="mobilemenu__header">
                    <div class="mobilemenu__title">Menu</div>
                    <button type="button" class="mobilemenu__close">
                        <svg width="20px" height="20px">
                            <use xlink:href="images/sprite.svg#cross-20"></use>
                        </svg>
                    </button>
                </div>
                <div class="mobilemenu__content">
                    <ul class="mobile-links mobile-links--level--0" data-collapse data-collapse-opened-class="mobile-links__item--open">
                        <li class="mobile-links__item" data-collapse-item>
                            <div class="mobile-links__item-title">
                                <a href="index.html" class="mobile-links__item-link">Home</a>
                                <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                    <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="mobile-links__item-sub-links" data-collapse-content>
                                <ul class="mobile-links mobile-links--level--1">
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="index.html" class="mobile-links__item-link">Home 1</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="index-2.html" class="mobile-links__item-link">Home 2</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                            <div class="mobile-links__item-title">
                                <a href="" class="mobile-links__item-link">Categories</a>
                                <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                    <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="mobile-links__item-sub-links" data-collapse-content>
                                <ul class="mobile-links mobile-links--level--1">
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="" class="mobile-links__item-link">Power Tools</a>
                                                <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                                    <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="mobile-links__item-sub-links" data-collapse-content>
                                            <ul class="mobile-links mobile-links--level--2">
                                                <li class="mobile-links__item" data-collapse-item>
                                                    <div class="mobile-links__item-title">
                                                        <a href="" class="mobile-links__item-link">Engravers</a>
                                                    </div>
                                                </li>
                                                <li class="mobile-links__item" data-collapse-item>
                                                    <div class="mobile-links__item-title">
                                                        <a href="" class="mobile-links__item-link">Wrenches</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="" class="mobile-links__item-link">Machine Tools</a>
                                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="mobile-links__item-sub-links" data-collapse-content>
                                            <ul class="mobile-links mobile-links--level--2">
                                                <li class="mobile-links__item" data-collapse-item>
                                                    <div class="mobile-links__item-title">
                                                        <a href="" class="mobile-links__item-link">Thread Cutting</a>
                                                    </div>
                                                </li>
                                                <li class="mobile-links__item" data-collapse-item>
                                                    <div class="mobile-links__item-title">
                                                        <a href="" class="mobile-links__item-link">Chip Blowers</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                            <div class="mobile-links__item-title">
                                <a href="shop-grid-3-columns-sidebar.html"
                                    class="mobile-links__item-link">Shop</a>
                                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="mobile-links__item-sub-links" data-collapse-content>
                                <ul class="mobile-links mobile-links--level--1">
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Shop Grid</a>
                                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="mobile-links__item-sub-links" data-collapse-content>
                                            <ul class="mobile-links mobile-links--level--2">
                                                <li class="mobile-links__item" data-collapse-item>
                                                    <div class="mobile-links__item-title">
                                                        <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">3 Columns Sidebar</a></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="shop-list.html" class="mobile-links__item-link">Shop List</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="shop-right-sidebar.html" class="mobile-links__item-link">Shop Right Sidebar</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="product.html" class="mobile-links__item-link">Product</a>
                                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="mobile-links__item-sub-links" data-collapse-content>
                                            <ul class="mobile-links mobile-links--level--2">
                                                <li class="mobile-links__item" data-collapse-item>
                                                    <div class="mobile-links__item-title">
                                                        <a href="product.html" class="mobile-links__item-link">Product</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="cart.html" class="mobile-links__item-link">Cart</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="cart-empty.html" class="mobile-links__item-link">Cart Empty</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="checkout.html" class="mobile-links__item-link">Checkout</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="order-success.html" class="mobile-links__item-link">Order Success</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="wishlist.html" class="mobile-links__item-link">Wishlist</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="compare.html" class="mobile-links__item-link">Compare</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="track-order.html" class="mobile-links__item-link">Track Order</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                            <div class="mobile-links__item-title">
                                <a href="account-login.html" class="mobile-links__item-link">Account</a>
                                <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                    <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="mobile-links__item-sub-links" data-collapse-content>
                                <ul class="mobile-links mobile-links--level--1">
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="account-login.html" class="mobile-links__item-link">Login</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="account-dashboard.html" class="mobile-links__item-link">Dashboard</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="account-profile.html" class="mobile-links__item-link">Edit Profile</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="account-orders.html" class="mobile-links__item-link">Order History</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="account-order-details.html" class="mobile-links__item-link">Order Details</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="account-addresses.html" class="mobile-links__item-link">Address Book</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="account-edit-address.html" class="mobile-links__item-link">Edit Address</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="account-password.html" class="mobile-links__item-link">Change Password</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                            <div class="mobile-links__item-title">
                                <a href="blog-classic.html" class="mobile-links__item-link">Blog</a>
                                <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                    <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="mobile-links__item-sub-links" data-collapse-content>
                                <ul class="mobile-links mobile-links--level--1">
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="blog-classic.html"
                                                class="mobile-links__item-link">Blog Classic</a></div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="blog-grid.html"
                                                class="mobile-links__item-link">Blog Grid</a></div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="blog-list.html"
                                                class="mobile-links__item-link">Blog List</a></div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="blog-left-sidebar.html"
                                                class="mobile-links__item-link">Blog Left Sidebar</a></div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="post.html"
                                                class="mobile-links__item-link">Post Page</a></div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="post-without-sidebar.html"
                                                class="mobile-links__item-link">Post Without Sidebar</a></div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                            <div class="mobile-links__item-title"><a href="" class="mobile-links__item-link">Pages</a>
                                <button class="mobile-links__item-toggle" type="button" data-collapse-trigger><svg
                                        class="mobile-links__item-arrow" width="12px" height="7px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                    </svg></button></div>
                            <div class="mobile-links__item-sub-links" data-collapse-content>
                                <ul class="mobile-links mobile-links--level--1">
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="about-us.html"
                                                class="mobile-links__item-link">About Us</a></div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="contact-us.html"
                                                class="mobile-links__item-link">Contact Us</a></div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="contact-us-alt.html"
                                                class="mobile-links__item-link">Contact Us Alt</a></div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="404.html"
                                                class="mobile-links__item-link">404</a></div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="terms-and-conditions.html"
                                                class="mobile-links__item-link">Terms And Conditions</a></div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="faq.html"
                                                class="mobile-links__item-link">FAQ</a></div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="components.html"
                                                class="mobile-links__item-link">Components</a></div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="typography.html"
                                                class="mobile-links__item-link">Typography</a></div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                            <div class="mobile-links__item-title"><a data-collapse-trigger
                                    class="mobile-links__item-link">Currency</a> <button class="mobile-links__item-toggle"
                                    type="button" data-collapse-trigger><svg class="mobile-links__item-arrow" width="12px"
                                        height="7px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                    </svg></button></div>
                            <div class="mobile-links__item-sub-links" data-collapse-content>
                                <ul class="mobile-links mobile-links--level--1">
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="" class="mobile-links__item-link">€
                                                Euro</a></div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="" class="mobile-links__item-link">£
                                                Pound Sterling</a></div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="" class="mobile-links__item-link">$
                                                US Dollar</a></div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title"><a href="" class="mobile-links__item-link">₽
                                                Russian Ruble</a></div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                            <div class="mobile-links__item-title"><a data-collapse-trigger
                                    class="mobile-links__item-link">Language</a>
                                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="mobile-links__item-sub-links" data-collapse-content>
                                <ul class="mobile-links mobile-links--level--1">
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="" class="mobile-links__item-link">English</a>
                                        </div>
                                    </li>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="" class="mobile-links__item-link">French</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- mobilemenu / end -->

        <!-- desktop site__header -->
        <header class="site__header d-lg-block d-none">
            <div class="site-header">
                <!-- Topbar -->
                <div class="site-header__topbar topbar">
                    <div class="topbar__container container">
                        <div class="topbar__row">
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="about-us.html">About Us</a>
                            </div>
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="contact-us.html">Contacts</a>
                            </div>
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="#">Store Location</a>
                            </div>
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="track-order.html">Track Order</a>
                            </div>
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="blog-classic.html">Blog</a>
                            </div>
                            <div class="topbar__spring">
                            </div>
                            <div class="topbar__item">
                                <div class="topbar-dropdown">
                                    <button class="topbar-dropdown__btn" type="button">My Account
                                        <svg width="7px" height="5px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                        </svg>
                                    </button>
                                    <div class="topbar-dropdown__body">
                                        <!-- .menu -->
                                        <div class="menu menu--layout--topbar">
                                            <div class="menu__submenus-container"></div>
                                            <ul class="menu__list">
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account-dashboard.html">Dashboard</a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account-profile.html">Edit Profile</a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account-orders.html">Order History</a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account-addresses.html">Addresses</a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account-password.html">Password</a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account-login.html">Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .menu / end -->
                                    </div>
                                </div>
                            </div>
                            <div class="topbar__item">
                                <div class="topbar-dropdown">
                                    <button class="topbar-dropdown__btn" type="button">Currency:
                                        <span class="topbar__item-value">USD</span>
                                        <svg width="7px" height="5px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                        </svg>
                                    </button>
                                    <div class="topbar-dropdown__body">
                                        <!-- .menu -->
                                        <div class="menu menu--layout--topbar">
                                            <div class="menu__submenus-container"></div>
                                            <ul class="menu__list">
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="#">€ Euro</a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="#">£ Pound Sterling</a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="#">$ US Dollar</a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="#">₽ Russian Ruble</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .menu / end -->
                                    </div>
                                </div>
                            </div>
                            <div class="topbar__item">
                                <div class="topbar-dropdown"><button class="topbar-dropdown__btn" type="button">Language:
                                        <span class="topbar__item-value">EN</span> <svg width="7px" height="5px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                        </svg>
                                    </button>
                                    <div class="topbar-dropdown__body">
                                        <!-- .menu -->
                                        <div class="menu menu--layout--topbar menu--with-icons">
                                            <div class="menu__submenus-container"></div>
                                            <ul class="menu__list">
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="#">
                                                        <div class="menu__item-icon">
                                                            <img srcset="images/languages/language-1.png, images/languages/language-1@2x.png 2x" src="images/languages/language-1.png" alt="">
                                                        </div>
                                                        English
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .menu / end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .topbar / end -->
                <div class="site-header__middle container">
                    <div class="site-header__logo">
                        <a href="index.html">
                            <!-- logo -->
                            <img src="{{ asset('images/logos/log1.png') }}" width="200px" height="50px" style=""> 
                            <!-- logo / end -->
                        </a>
                    </div>
                    <div class="site-header__search">
                        <div class="search search--location--header">
                            <div class="search__body">
                                <form class="search__form" action="#">
                                    <input class="search__input" name="search" placeholder="Search over 10,000 products" aria-label="Site search" type="text" autocomplete="off">
                                    <button class="search__button search__button--type--submit" type="submit">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#search-20"></use>
                                        </svg></button>
                                    <div class="search__border"></div>
                                </form>
                                <div class="search__suggestions suggestions suggestions--location--header"></div>
                            </div>
                        </div>
                    </div>
                    <div class="site-header__phone">
                        <div class="site-header__phone-title">Customer Service</div>
                        <div class="site-header__phone-number">(800) 060-0730</div>
                    </div>
                </div>
                <div class="site-header__nav-panel">
                    <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
                    <div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow">
                        <div class="nav-panel__container container">
                            <div class="nav-panel__row">
                                <!-- .departments -->
                                <div class="nav-panel__departments">
                                    <div class="departments" data-departments-fixed-by="">
                                        <div class="departments__body">
                                            <div class="departments__links-wrapper">
                                                <div class="departments__submenus-container"></div>
                                                <ul class="departments__links">
                                                    <li class="departments__item">
                                                        <a class="departments__item-link" href="#">Power Tools
                                                            <svg class="departments__item-arrow" width="6px" height="9px">
                                                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                </use>
                                                            </svg>
                                                        </a>
                                                        <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--xl">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu megamenu--departments">
                                                                <div class="megamenu__body"
                                                                    style="background-image: url('images/megamenu/megamenu-1.jpg');">
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <ul
                                                                                class="megamenu__links megamenu__links--level--0">
                                                                                <li
                                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Power Tools</a>
                                                                                    <ul
                                                                                        class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Engravers</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Drills</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="megamenu__item"><a
                                                                                        href="#">Workbenches</a></li>
                                                                                <li class="megamenu__item">
                                                                                    <a href="#">Presses</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <ul
                                                                                class="megamenu__links megamenu__links--level--0">
                                                                                <li
                                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Hand Tools</a>
                                                                                    <ul
                                                                                        class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Screwdrivers</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Handsaws</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li
                                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Garden Equipment</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Motor Pumps</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Chainsaws</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <ul
                                                                                class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Machine Tools</a>
                                                                                    <ul
                                                                                        class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Thread Cutting</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Chip Blowers</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <ul
                                                                                class="megamenu__links megamenu__links--level--0">
                                                                                <li
                                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Instruments</a>
                                                                                    <ul
                                                                                        class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Welding Equipment</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Power Tools</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item">
                                                        <a class="departments__item-link" href="#">Hand Tools
                                                            <svg class="departments__item-arrow" width="6px" height="9px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                </use>
                                                            </svg>
                                                        </a>
                                                        <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--lg">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu megamenu--departments">
                                                                <div class="megamenu__body" style="background-image: url('images/megamenu/megamenu-2.jpg');">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Hand Tools</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Screwdrivers</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Handsaws</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Garden Equipment</a>
                                                                                    <ul
                                                                                        class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Motor Pumps</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Chainsaws</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Machine Tools</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Thread Cutting</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Chip Blowers</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <ul
                                                                                class="megamenu__links megamenu__links--level--0">
                                                                                <li
                                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Instruments</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Welding Equipment</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item">
                                                                                            <a href="#">Power Tools</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item"><a class="departments__item-link"
                                                            href="#">Machine Tools <svg class="departments__item-arrow"
                                                                width="6px" height="9px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                </use>
                                                            </svg></a>
                                                        <div
                                                            class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--nl">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu megamenu--departments">
                                                                <div class="megamenu__body"
                                                                    style="background-image: url('images/megamenu/megamenu-3.jpg');">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <ul
                                                                                class="megamenu__links megamenu__links--level--0">
                                                                                <li
                                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Hand Tools</a>
                                                                                    <ul
                                                                                        class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Screwdrivers</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Handsaws</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Knives</a></li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Axes</a></li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Multitools</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Paint Tools</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li
                                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Garden Equipment</a>
                                                                                    <ul
                                                                                        class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Motor Pumps</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Chainsaws</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Electric
                                                                                                Saws</a></li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Brush
                                                                                                Cutters</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <ul
                                                                                class="megamenu__links megamenu__links--level--0">
                                                                                <li
                                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Instruments</a>
                                                                                    <ul
                                                                                        class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Welding
                                                                                                Equipment</a></li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Power Tools</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Hand Tools</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Measuring
                                                                                                Tool</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item"><a class="departments__item-link"
                                                            href="#">Building Supplies <svg
                                                                class="departments__item-arrow" width="6px"
                                                                height="9px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                </use>
                                                            </svg></a>
                                                        <div
                                                            class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--sm">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu megamenu--departments">
                                                                <div class="megamenu__body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <ul
                                                                                class="megamenu__links megamenu__links--level--0">
                                                                                <li
                                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Hand Tools</a>
                                                                                    <ul
                                                                                        class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Screwdrivers</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Handsaws</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Knives</a></li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Axes</a></li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Multitools</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Paint Tools</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li
                                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Garden Equipment</a>
                                                                                    <ul
                                                                                        class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Motor Pumps</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Chainsaws</a>
                                                                                        </li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Electric
                                                                                                Saws</a></li>
                                                                                        <li class="megamenu__item"><a
                                                                                                href="#">Brush
                                                                                                Cutters</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item"><a class="departments__item-link"
                                                            href="#">Electrical <svg class="departments__item-arrow"
                                                                width="6px" height="9px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                </use>
                                                            </svg></a>
                                                        <div
                                                            class="departments__submenu departments__submenu--type--menu">
                                                            <!-- .menu -->
                                                            <div class="menu menu--layout--classic">
                                                                <div class="menu__submenus-container"></div>
                                                                <ul class="menu__list">
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div><a
                                                                            class="menu__item-link" href="#">Soldering
                                                                            Equipment <svg class="menu__item-arrow"
                                                                                width="6px" height="9px">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                                </use>
                                                                            </svg></a>
                                                                        <div class="menu__submenu">
                                                                            <!-- .menu -->
                                                                            <div class="menu menu--layout--classic">
                                                                                <div class="menu__submenus-container">
                                                                                </div>
                                                                                <ul class="menu__list">
                                                                                    <li class="menu__item">
                                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                                        <div
                                                                                            class="menu__item-submenu-offset">
                                                                                        </div><a class="menu__item-link"
                                                                                            href="#">Soldering
                                                                                            Station</a>
                                                                                    </li>
                                                                                    <li class="menu__item">
                                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                                        <div
                                                                                            class="menu__item-submenu-offset">
                                                                                        </div><a class="menu__item-link"
                                                                                            href="#">Soldering
                                                                                            Dryers</a>
                                                                                    </li>
                                                                                    <li class="menu__item">
                                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                                        <div
                                                                                            class="menu__item-submenu-offset">
                                                                                        </div><a class="menu__item-link"
                                                                                            href="#">Gas Soldering
                                                                                            Iron</a>
                                                                                    </li>
                                                                                    <li class="menu__item">
                                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                                        <div
                                                                                            class="menu__item-submenu-offset">
                                                                                        </div><a class="menu__item-link"
                                                                                            href="#">Electric Soldering
                                                                                            Iron</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div><!-- .menu / end -->
                                                                        </div>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div><a
                                                                            class="menu__item-link" href="#">Light
                                                                            Bulbs</a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div><a
                                                                            class="menu__item-link"
                                                                            href="#">Batteries</a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div><a
                                                                            class="menu__item-link" href="#">Light
                                                                            Fixtures</a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div><a
                                                                            class="menu__item-link" href="#">Warm
                                                                            Floor</a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div><a
                                                                            class="menu__item-link"
                                                                            href="#">Generators</a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div><a
                                                                            class="menu__item-link" href="#">UPS</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- .menu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item"><a class="departments__item-link"
                                                            href="#">Power Machinery</a></li>
                                                    <li class="departments__item"><a class="departments__item-link"
                                                            href="#">Measurement</a></li>
                                                    <li class="departments__item"><a class="departments__item-link"
                                                            href="#">Clothes & PPE</a></li>
                                                    <li class="departments__item"><a class="departments__item-link"
                                                            href="#">Plumbing</a></li>
                                                    <li class="departments__item"><a class="departments__item-link"
                                                            href="#">Storage & Organization</a></li>
                                                    <li class="departments__item"><a class="departments__item-link"
                                                            href="#">Welding & Soldering</a></li>
                                                </ul>
                                            </div>
                                        </div><button class="departments__button"><svg class="departments__button-icon"
                                                width="18px" height="14px">
                                                <use xlink:href="images/sprite.svg#menu-18x14"></use>
                                            </svg> Shop By Category <svg class="departments__button-arrow" width="9px"
                                                height="6px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                            </svg></button>
                                    </div>
                                    <!-- .departments / end -->
                                </div>

                                <!-- .nav-links -->
                                <div class="nav-panel__nav-links nav-links">
                                    <ul class="nav-links__list">
                                        <li class="nav-links__item nav-links__item--has-submenu">
                                            <a class="nav-links__item-link" href="index.html">
                                                <div class="nav-links__item-body">Home
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6">
                                                        </use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="nav-links__submenu nav-links__submenu--type--menu">
                                                <!-- .menu -->
                                                <div class="menu menu--layout--classic">
                                                    <div class="menu__submenus-container"></div>
                                                    <ul class="menu__list">
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index.html">Home 1 Slideshow</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index-2.html">Home 2 Slideshow</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item nav-links__item--has-submenu">
                                            <a class="nav-links__item-link" href="#">
                                                <div class="nav-links__item-body">About Us
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6">
                                                        </use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="nav-links__submenu nav-links__submenu--type--menu">
                                                <!-- .menu -->
                                                <div class="menu menu--layout--classic">
                                                    <div class="menu__submenus-container"></div>
                                                    <ul class="menu__list">
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="about-us.html">Our Company</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="contact-us.html">Careers</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="terms-and-conditions.html">Events</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="terms-and-conditions.html">Blogs</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="terms-and-conditions.html">Contact Us</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item nav-links__item--has-submenu">
                                            <a class="nav-links__item-link" href="#">
                                                <div class="nav-links__item-body">Megamenu
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6">
                                                        </use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="nav-links__submenu nav-links__submenu--type--megamenu nav-links__submenu--size--nl">
                                                <!-- .megamenu -->
                                                <div class="megamenu">
                                                    <div class="megamenu__body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                    <li class="megamenu__item megamenu__item--with-submenu">
                                                                        <a href="#">Power Tools</a>
                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                            <li class="megamenu__item">
                                                                                <a href="#">Engravers</a>
                                                                            </li>
                                                                            <li class="megamenu__item">
                                                                                <a href="#">Wrenches</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="megamenu__item megamenu__item--with-submenu">
                                                                        <a href="#">Machine Tools</a>
                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                            <li class="megamenu__item">
                                                                                <a href="#">Thread Cutting</a>
                                                                            </li>
                                                                            <li class="megamenu__item">
                                                                                <a href="#">Chip Blowers</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-6">
                                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                    <li class="megamenu__item megamenu__item--with-submenu">
                                                                        <a href="#">Hand Tools</a>
                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                            <li class="megamenu__item">
                                                                                <a href="#">Screwdrivers</a>
                                                                            </li>
                                                                            <li class="megamenu__item">
                                                                                <a href="#">Handsaws</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="megamenu__item megamenu__item--with-submenu">
                                                                        <a href="#">Garden Equipment</a>
                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                            <li class="megamenu__item"><a href="#">Motor
                                                                                    Pumps</a></li>
                                                                            <li class="megamenu__item">
                                                                                <a href="#">Chainsaws</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .megamenu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item nav-links__item--has-submenu">
                                            <a class="nav-links__item-link" href="shop-grid-3-columns-sidebar.html">
                                                <div class="nav-links__item-body">Shop
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6">
                                                        </use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="nav-links__submenu nav-links__submenu--type--menu">
                                                <!-- .menu -->
                                                <div class="menu menu--layout--classic">
                                                    <div class="menu__submenus-container"></div>
                                                    <ul class="menu__list">
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="shop-grid-3-columns-sidebar.html">Shop Grid
                                                                <svg class="menu__item-arrow" width="6px" height="9px">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <div class="menu__submenu">
                                                                <!-- .menu -->
                                                                <div class="menu menu--layout--classic">
                                                                    <div class="menu__submenus-container"></div>
                                                                    <ul class="menu__list">
                                                                        <li class="menu__item">
                                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                            <div class="menu__item-submenu-offset">
                                                                            </div>
                                                                            <a class="menu__item-link" href="shop-grid-3-columns-sidebar.html">3 Columns Sidebar</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- .menu / end -->
                                                            </div>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="shop-list.html">Shop List</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="product.html">Product
                                                                <svg class="menu__item-arrow" width="6px" height="9px">
                                                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <div class="menu__submenu">
                                                                <!-- .menu -->
                                                                <div class="menu menu--layout--classic">
                                                                    <div class="menu__submenus-container"></div>
                                                                    <ul class="menu__list">
                                                                        <li class="menu__item">
                                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                            <div class="menu__item-submenu-offset">
                                                                            </div>
                                                                            <a class="menu__item-link" href="product.html">Product</a>
                                                                        </li>
                                                                        <li class="menu__item">
                                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                            <div class="menu__item-submenu-offset">
                                                                            </div><a class="menu__item-link"
                                                                                href="product-alt.html">Product Alt</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- .menu / end -->
                                                            </div>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="cart.html">Cart</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="cart-empty.html">Cart Empty</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="checkout.html">Checkout</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="order-success.html">Order Success</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="wishlist.html">Wishlist</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="compare.html">Compare</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="track-order.html">Track Order</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item nav-links__item--has-submenu">
                                            <a class="nav-links__item-link" href="account-login.html">
                                                <div class="nav-links__item-body">Account
                                                    <svg class="nav-links__item-arrow"width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6">
                                                        </use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="nav-links__submenu nav-links__submenu--type--menu">
                                                <!-- .menu -->
                                                <div class="menu menu--layout--classic">
                                                    <div class="menu__submenus-container"></div>
                                                    <ul class="menu__list">
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="account-login.html">Login</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="account-dashboard.html">Dashboard</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="account-profile.html">Edit Profile</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="account-orders.html">Order History</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="account-order-details.html">Order Details</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="account-addresses.html">Address Book</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="account-edit-address.html">Edit Address</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="account-password.html">Change Password</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item nav-links__item--has-submenu">
                                            <a class="nav-links__item-link" href="blog-classic.html">
                                                <div class="nav-links__item-body">Blog
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6">
                                                        </use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="nav-links__submenu nav-links__submenu--type--menu">
                                                <!-- .menu -->
                                                <div class="menu menu--layout--classic">
                                                    <div class="menu__submenus-container"></div>
                                                    <ul class="menu__list">
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="blog-classic.html">Blog Classic</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="blog-grid.html">Blog Grid</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="blog-list.html">Blog List</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="post.html">Post Page</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="post-without-sidebar.html">Post Without Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- .nav-links / end -->
                                <div class="nav-panel__indicators">
                                    <div class="indicator">
                                        <a href="wishlist.html" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="images/sprite.svg#heart-20"></use>
                                                </svg>
                                                <span class="indicator__value">0</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="indicator indicator--trigger--click">
                                        <a href="cart.html" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="images/sprite.svg#cart-20"></use>
                                                </svg>
                                                <span class="indicator__value">3</span>
                                            </span>
                                        </a>
                                        <div class="indicator__dropdown">
                                            <!-- .dropcart -->
                                            <div class="dropcart dropcart--style--dropdown">
                                                <div class="dropcart__body">
                                                    <div class="dropcart__products-list">
                                                        <div class="dropcart__product">
                                                            <div class="product-image dropcart__product-image">
                                                                <a href="product.html" class="product-image__body">
                                                                    <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="dropcart__product-info">
                                                                <div class="dropcart__product-name">
                                                                    <a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a>
                                                                </div>
                                                                <ul class="dropcart__product-options">
                                                                    <li>Color: Yellow</li>
                                                                    <li>Material: Aluminium</li>
                                                                </ul>
                                                                <div class="dropcart__product-meta">
                                                                    <span class="dropcart__product-quantity">2</span>×
                                                                    <span class="dropcart__product-price">$699.00</span>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                                <svg width="10px" height="10px">
                                                                    <use xlink:href="images/sprite.svg#cross-10"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="dropcart__product">
                                                            <div class="product-image dropcart__product-image">
                                                                <a href="product.html" class="product-image__body">
                                                                    <img class="product-image__img" src="images/products/product-2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="dropcart__product-info">
                                                                <div class="dropcart__product-name">
                                                                    <a href="product.html">Undefined Tool IRadix DPS3000SY 2700 watts</a>
                                                                </div>
                                                                <div class="dropcart__product-meta">
                                                                    <span class="dropcart__product-quantity">1</span>×
                                                                    <span class="dropcart__product-price">$849.00</span>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                                <svg width="10px" height="10px">
                                                                    <use xlink:href="images/sprite.svg#cross-10"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="dropcart__product">
                                                            <div class="product-image dropcart__product-image">
                                                                <a href="product.html" class="product-image__body">
                                                                    <img class="product-image__img" src="images/products/product-5.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="dropcart__product-info">
                                                                <div class="dropcart__product-name">
                                                                    <a href="product.html">Brandix Router Power Tool 2017ERXPK</a>
                                                                </div>
                                                                <ul class="dropcart__product-options">
                                                                    <li>Color: True Red</li>
                                                                </ul>
                                                                <div class="dropcart__product-meta">
                                                                    <span class="dropcart__product-quantity">3</span>×
                                                                    <span class="dropcart__product-price">$1,210.00</span>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                                <svg width="10px" height="10px">
                                                                    <use xlink:href="images/sprite.svg#cross-10"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="dropcart__totals">
                                                        <table>
                                                            <tr>
                                                                <th>Subtotal</th>
                                                                <td>$5,877.00</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Shipping</th>
                                                                <td>$25.00</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tax</th>
                                                                <td>$0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total</th>
                                                                <td>$5,902.00</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="dropcart__buttons">
                                                        <a class="btn btn-secondary" href="cart.html">View Cart</a>
                                                        <a class="btn btn-primary" href="checkout.html">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .dropcart / end -->
                                        </div>
                                    </div>
                                    <div class="indicator indicator--trigger--click">
                                        <a href="account-login.html" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="images/sprite.svg#person-20"></use>
                                                </svg>
                                            </span>
                                        </a>
                                        <div class="indicator__dropdown">
                                            <div class="account-menu">
                                                <form class="account-menu__form">
                                                    <div class="account-menu__form-title">Log In to Your Account</div>
                                                    <div class="form-group">
                                                        <label for="header-signin-email" class="sr-only">Email address</label>
                                                        <input id="header-signin-email" type="email" class="form-control form-control-sm" placeholder="Email address"></div>
                                                    <div class="form-group">
                                                        <label for="header-signin-password" class="sr-only">Password</label>
                                                        <div class="account-menu__form-forgot">
                                                            <input id="header-signin-password" type="password" class="form-control form-control-sm" placeholder="Password">
                                                            <a href="#" class="account-menu__form-forgot-link">Forgot?</a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group account-menu__form-button">
                                                        <button type="submit" class="btn btn-primary btn-sm">Login</button>
                                                    </div>
                                                    <div class="account-menu__form-link">
                                                        <a href="account-login.html">Create An Account</a>
                                                    </div>
                                                </form>
                                                <div class="account-menu__divider"></div>
                                                <a href="account-dashboard.html" class="account-menu__user">
                                                    <div class="account-menu__user-avatar">
                                                        <img src="images/avatars/avatar-3.jpg" alt=""><
                                                    </div>
                                                    <div class="account-menu__user-info">
                                                        <div class="account-menu__user-name">Helena Garcia</div>
                                                        <div class="account-menu__user-email">stroyka@example.com</div>
                                                    </div>
                                                </a>
                                                <div class="account-menu__divider"></div>
                                                <ul class="account-menu__links">
                                                    <li><a href="account-profile.html">Edit Profile</a></li>
                                                    <li><a href="account-orders.html">Order History</a></li>
                                                    <li><a href="account-addresses.html">Addresses</a></li>
                                                    <li><a href="account-password.html">Password</a></li>
                                                </ul>
                                                <div class="account-menu__divider"></div>
                                                <ul class="account-menu__links">
                                                    <li>
                                                        <a href="account-login.html">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- desktop site__header / end -->

        @yield('content')

        <!-- site__footer -->
        <footer class="site__footer">
            <div class="site-footer">
                <div class="container">
                    <div class="site-footer__widgets">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="site-footer__widget footer-contacts">
                                    <h5 class="footer-contacts__title">Contact Us</h5>
                                    <div class="footer-contacts__text">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Integer in feugiat lorem. Pellentque ac placerat tellus.
                                    </div>
                                    <ul class="footer-contacts__contacts">
                                        <li><i class="footer-contacts__icon fas fa-globe-americas"></i>
                                            715 Fake Street,
                                            New York 10021 USA
                                        </li>
                                        <li>
                                            <i class="footer-contacts__icon far fa-envelope"></i>
                                            stroyka@example.com
                                        </li>
                                        <li>
                                            <i class="footer-contacts__icon fas fa-mobile-alt"></i>
                                            (800) 060-0730, (800) 060-0730
                                        </li>
                                        <li>
                                            <i class="footer-contacts__icon far fa-clock"></i>
                                            Mon-Sat 10:00pm - 7:00pm
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2">
                                <div class="site-footer__widget footer-links">
                                    <h5 class="footer-links__title">Information</h5>
                                    <ul class="footer-links__list">
                                        <li class="footer-links__item">
                                            <a href="" class="footer-links__link">About Us</a>
                                        </li>
                                        <li class="footer-links__item">
                                            <a href="" class="footer-links__link">Delivery Information</a>
                                        </li>
                                        <li class="footer-links__item">
                                            <a href="" class="footer-links__link">Privacy Policy</a>
                                        </li>
                                        <li class="footer-links__item">
                                            <a href="" class="footer-links__link">Brands</a>
                                        </li>
                                        <li class="footer-links__item">
                                            <a href="" class="footer-links__link">Contact Us</a>
                                        </li>
                                        <li class="footer-links__item">
                                            <a href="" class="footer-links__link">Returns</a>
                                        </li>
                                        <li class="footer-links__item">
                                            <a href="" class="footer-links__link">Site Map</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2">
                                <div class="site-footer__widget footer-links">
                                    <h5 class="footer-links__title">My Account</h5>
                                    <ul class="footer-links__list">
                                        <li class="footer-links__item">
                                            <a href="" class="footer-links__link">Store Location</a>
                                        </li>
                                        <li class="footer-links__item">
                                            <a href="" class="footer-links__link">Order History</a>
                                        </li>
                                        <li class="footer-links__item">
                                            <a href="" class="footer-links__link">Wish List</a>
                                        </li>
                                        <li class="footer-links__item">
                                            <a href="" class="footer-links__link">Newsletter</a>
                                        </li>
                                        <li class="footer-links__item">
                                            <a href="" class="footer-links__link">Specials</a>
                                        </li>
                                        <li class="footer-links__item">
                                            <a href="" class="footer-links__link">Gift Certificates</a>
                                        </li>
                                        <li class="footer-links__item">
                                            <a href="" class="footer-links__link">Affiliate</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="site-footer__widget footer-newsletter">
                                    <h5 class="footer-newsletter__title">Newsletter</h5>
                                    <div class="footer-newsletter__text">
                                        Praesent pellentesque volutpat ex, vitae auctor
                                        lorem pulvinar mollis felis at lacinia.
                                    </div>
                                    <form action="" class="footer-newsletter__form">
                                        <label class="sr-only" for="footer-newsletter-address">Email Address</label>
                                        <input type="text" class="footer-newsletter__form-input form-control" id="footer-newsletter-address" placeholder="Email Address...">
                                            <button class="footer-newsletter__form-button btn btn-primary">Subscribe</button>
                                    </form>
                                    <div class="footer-newsletter__text footer-newsletter__text--social">Follow us on social networks</div>
                                    <!-- social-links -->
                                    <div class="social-links footer-newsletter__social-links social-links--shape--circle">
                                        <ul class="social-links__list">
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--rss" href="" target="_blank">
                                                    <i class="fas fa-rss"></i>
                                                </a>
                                            </li>
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--youtube" href="" target="_blank">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--facebook" href="" target="_blank">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--twitter" href="" target="_blank">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--instagram" href="" target="_blank">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- social-links / end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer__bottom">
                        <div class="site-footer__payments"><img src="images/payments.png" alt=""></div>
                    </div>
                </div>
                <div class="totop">
                    <div class="totop__body">
                        <div class="totop__start"></div>
                        <div class="totop__container container"></div>
                        <div class="totop__end">
                            <button type="button" class="totop__button">
                                <svg width="13px" height="8px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-up-13x8"></use>
                                </svg>
                            </button>
                        </div>      
                    </div>
                </div>
            </div>
        </footer>
        <!-- site__footer / end -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="{{ asset('js/number.js') }}"></script>
    <script defer src="{{ asset('js/main.js') }}"></script>
    <script defer src="{{ asset('js/header.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script defer src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('vendor/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script defer src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/svg4everybody/svg4everybody.min.js') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-97489509-6');

    </script>
    <script>
        svg4everybody();
    </script>
</body>

</html>
