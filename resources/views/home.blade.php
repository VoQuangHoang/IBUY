<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/Ibuy/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Oct 2020 02:31:23 GMT -->

<head>
    <title>Ibuy</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ibuy shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('public/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.cs')}}s">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/slick-1.8.0/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>

<body>
    <div class="super_container">
        <!-- Header -->
        <header class="header">

            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="images/phone.png" alt=""></div>+84 03456789
                            </div>
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="images/mail.png" alt=""></div><a
                                    href="mailto:fastsales@gmail.com">support@ibuy.com</a>
                            </div>
                            <div class="top_bar_content ml-auto">
                               <div class="top_bar_user">
                                @guest
                            <div><a class="nav-link" href="{{ route('login') }}">{{ __('Đăng Nhập') }}</a>
                            </div>
                            <div><a class="nav-link" href="{{ route('register') }}">{{ __('Đăng Ký') }}</a></div>
                              @else
                            <div><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Đăng Xuất') }}
                                            <div>|{{ Auth::user()->name }}</div>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                    </div>
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Main -->

            <div class="header_main">
                <div class="container">
                    <div class="row">

                        <!-- Logo -->
                        <div class="col-lg-2 col-sm-3 col-3 order-1">
                            <div class="logo_container">
                                <div class="logo"><a href="./index.html">IBUY</a></div>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix">
                                            <input type="search" required="required" class="header_search_input"
                                                placeholder="Nhập sản phẩm bạn muốn tìm">
                                            <div class="custom_dropdown">
                                                <div class="custom_dropdown_list">
                                                    <span class="custom_dropdown_placeholder clc">
                                                        <!-- Danh mục sản phẩm --></span>
                                                    <i class="fas fa-chevron"></i>
                                                    <ul class="custom_list clc">
                                                        <li><a class="clc" href="#">
                                                                <!-- Danh Mục --></a></li>
                                                        <li><a class="clc" href="#">
                                                                <!-- Máy tính --></a></li>
                                                        <li><a class="clc" href="#">
                                                                <!-- sdsấ --></a></li>
                                                        <li><a class="clc" href="#">
                                                                <!-- ádsad --></a></li>
                                                        <li><a class="clc" href="#">
                                                                <!-- Hardádsaware --></a></li>
                                                        <li><a class="clc" href="#">
                                                                <!-- Smartphonsadsadases --></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300"
                                                value="Submit"><img src="images/search.png" alt=""></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist -->
                        <div class="col-lg-4 col-6 order-lg-3 order-2 text-lg-left text-right">
                            <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                    <i class="fas fa-users"></i>
                                    <div class="wishlist_content">
                                        <div class="wishlist_text"><a href="#">Tài khoản</a></div>

                                    </div>

                                    <!-- Cart -->
                                    <div class="cart">
                                        <div
                                            class="cart_container d-flex flex-row align-items-center justify-content-end">

                                            <div class="cart_content">
                                                <div class="cart_text"><a href="#"><i class="fas fa-cart-plus"></i> Giỏ
                                                        hàng</a></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Navigation -->

                <nav class="main_nav">
                    <div class="container">
                        <div class="row">
                            <div class="col">

                                <div class="main_nav_content d-flex flex-row">

                                    <!-- Categories Menu -->

                                    <div class="cat_menu_container">
                                        <div
                                            class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                            <div class="cat_burger"><span></span><span></span><span></span></div>
                                            <div class="cat_menu_text">Danh mục sản phẩm</div>
                                        </div>

                                        <ul class="cat_menu">
                                            <li><a href="#">Iphone <i class="fas fa-chevron-right ml-auto"></i></a></li>
                                            <li><a href="#">Sam Sung<i class="fas fa-chevron-right"></i></a></li>
                                            <li class="hassubs">
                                                <a href="#">Oppo<i class="fas fa-chevron-right"></i></a>
                                                <ul>
                                                    <li class="hassubs">
                                                        <a href="#">Xiaomi<i class="fas fa-chevron-right"></i></a>
                                                        <ul>
                                                            <li><a href="#">Menu Item<i
                                                                        class="fas fa-chevron-right"></i></a></li>
                                                            <li><a href="#">Menu Item<i
                                                                        class="fas fa-chevron-right"></i></a></li>
                                                            <li><a href="#">Menu Item<i
                                                                        class="fas fa-chevron-right"></i></a></li>
                                                            <li><a href="#">Menu Item<i
                                                                        class="fas fa-chevron-right"></i></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
                                                    </li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
                                                    </li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Xiaomi<i class="fas fa-chevron-right"></i></a></li>
                                            <li><a href="#">Vivo<i class="fas fa-chevron-right"></i></a></li>
                                            <li><a href="#">Realme<i class="fas fa-chevron-right"></i></a></li>
                                            <li><a href="#">Oneplus<i class="fas fa-chevron-right"></i></a></li>
                                            <li><a href="#">Vsmart<i class="fas fa-chevron-right"></i></a></li>
                                            <li><a href="#">Nokia<i class="fas fa-chevron-right"></i></a></li>
                                        </ul>
                                    </div>

                                    <!-- Main Nav Menu -->

                                    <div class="main_nav_menu ml-auto">
                                        <ul class="standard_dropdown main_nav_dropdown">
                                            <li><a href="#">Trang Chủ<i class="fas fa-chevron-down"></i></a></li>
                                            <li class="hassubs">
                                                <a href="#">Siêu Khuyến Mai<i class="fas fa-chevron-down"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                        <ul>
                                                            <li><a href="#">Menu Item<i
                                                                        class="fas fa-chevron-down"></i></a></li>
                                                            <li><a href="#">Menu Item<i
                                                                        class="fas fa-chevron-down"></i></a></li>
                                                            <li><a href="#">Menu Item<i
                                                                        class="fas fa-chevron-down"></i></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                    </li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                    </li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="hassubs">
                                                <a href="#">Sản phẩm mới<i class="fas fa-chevron-down"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                        <ul>
                                                            <li><a href="#">Menu Item<i
                                                                        class="fas fa-chevron-down"></i></a></li>
                                                            <li><a href="#">Menu Item<i
                                                                        class="fas fa-chevron-down"></i></a></li>
                                                            <li><a href="#">Menu Item<i
                                                                        class="fas fa-chevron-down"></i></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                    </li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                    </li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="hassubs">
                                                <a href="#">Pages<i class="fas fa-chevron-down"></i></a>
                                                <!-- <ul>
                                            <li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                                        </ul> -->
                                            </li>
                                            <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="contact.html">Liên Hệ<i class="fas fa-chevron-down"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Menu Trigger -->

                                    <div class="menu_trigger_container ml-auto">
                                        <div
                                            class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                            <div class="menu_burger">
                                                <div class="menu_trigger_text">menu</div>
                                                <div class="cat_burger menu_burger_inner">
                                                    <span></span><span></span><span></span></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Menu -->

                <!-- <div class="page_menu">
            <div class="container">
                <div class="row">
                    <div class="col">
                        
                        <div class="page_menu_content">
                            
                            <div class="page_menu_search">
                                <form action="#">
                                    <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                                </form>
                            </div>
                            <ul class="page_menu_nav">
                                <li class="page_menu_item has-children">
                                    <a href="#">Language<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item">
                                    <a href="#">Home<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                        <li class="page_menu_item has-children">
                                            <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                            <ul class="page_menu_selection">
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                            
                            <div class="menu_contact">
                                <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570</div>
                                <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        </header>


        <!-- Characteristics -->

        <div class="characteristics">
            <div class="container">
                <div class="row">
                    <!-- Banner -->

                    <div class="banner">
                        <div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="banner_product_image" style="top: -69px;"><img
                                        src="https://o.remove.bg/downloads/7a5771ed-77b8-4efe-b385-ff3cfdc47fe8/Untitled-1-removebg-preview.png"
                                        alt=""></div>
                                <div class="col-lg-5 offset-lg-4 fill_height">
                                    <div class="banner_content">
                                        <h1 class="banner_text">Đã có hàng Iphone 12</h1>
                                        <div class="banner_price">24.490.000 VNĐ</div>
                                        <div class="banner_product_name">Apple Iphone 12 Series</div>
                                        <div class="button banner_button"><a href="#">Đặt Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8" style="padding: 0;padding-top: 20px;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"
                                style="width: 95%;  margin-left: 15px;">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://cdn.tgdd.vn/2020/10/banner/800-170-800x170-45.png" class=""
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://cdn.tgdd.vn/2020/10/banner/iphone-12-800-170-800x170-3.png"
                                            class="" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://cdn.tgdd.vn/2020/10/banner/a51-71-800-170-800x170.png"
                                            class="" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col -->
                        <div class="col-md-4" style="padding: 0;padding-top: 20px;">
                            <div class="quangcao">
                                <div class="anh1">
                                    <img src="https://cdn.tgdd.vn/2020/09/banner/A31-11-390-80-390x80-4.png" alt=""
                                        style="padding-bottom: 10px;">
                                </div>
                                <div class="anh2">
                                    <img src="https://cdn.tgdd.vn/2020/09/banner/sticky-oppo-a523-390-80-390x80.png"
                                        alt="">
                                </div>


                            </div>
                        </div>
                    </div> <!-- roww -->
                    <div class="row " style="width: 120% ;padding-top: 10px;">
                        <div class="col-lg-3 col-md-6 char_col">

                            <div class="char_item d-flex flex-row align-items-center justify-content-start">
                                <div class="char_icon"><img src="images/char_1.png" alt=""></div>
                                <div class="char_content">
                                    <div class="char_title">Miễn phí vận chuyển</div>
                                    <div class="char_subtitle">toàn quốc</div>
                                </div>
                            </div>
                        </div>

                        <!-- Char. Item -->
                        <div class="col-lg-3 col-md-6 char_col">

                            <div class="char_item d-flex flex-row align-items-center justify-content-start">
                                <div class="char_icon"><img src="images/char_2.png" alt=""></div>
                                <div class="char_content">
                                    <div class="char_title">Chế độ đổi trả</div>
                                    <div class="char_subtitle">30 ngày</div>
                                </div>
                            </div>
                        </div>

                        <!-- Char. Item -->
                        <div class="col-lg-3 col-md-6 char_col">

                            <div class="char_item d-flex flex-row align-items-center justify-content-start">
                                <div class="char_icon"><img src="images/char_3.png" alt=""></div>
                                <div class="char_content">
                                    <div class="char_title">Trả góp</div>
                                    <div class="char_subtitle">0%</div>
                                </div>
                            </div>
                        </div>

                        <!-- Char. Item -->
                        <div class="col-lg-3 col-md-6 char_col">

                            <div class="char_item d-flex flex-row align-items-center justify-content-start">
                                <div class="char_icon"><img src="images/char_4.png" alt=""></div>
                                <div class="char_content">
                                    <div class="char_title">Nhiều deal</div>
                                    <div class="char_subtitle">Khuyến mãi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Deals of the week -->

        <div class="deals_featured">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                        <!-- Deals -->

                        <div class="deals">
                            <div class="deals_title"><i class="fab fa-hotjar"></i> Khuyến Mãi</div>
                            <div class="deals_slider_container">

                                <!-- Deals Slider -->
                                <div class="owl-carousel owl-theme deals_slider">

                                    <!-- Deals Item -->
                                    <div class="owl-item deals_item">
                                        <div class="deals_image"><img
                                                src="https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-191020-021035-400x400.jpg"
                                                alt=""></div>
                                        <div class="deals_content">
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_category"><a href="#">Apple</a></div>
                                                <div class="deals_item_price_a ml-auto"></div>
                                            </div>
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_name">Iphone 12</div>
                                                <div class="deals_item_price ml-auto">43.000.000 <sup>Vnđ</sup> </div>
                                            </div>
                                            <div class="available">
                                                <div class="available_line d-flex flex-row justify-content-start">
                                                    <div class="available_title">Đã bán: <span>6</span></div>
                                                    <div class="sold_title ml-auto">Số lượng còn: <span>28</span></div>
                                                </div>
                                                <div class="available_bar"><span style="width:17%"></span></div>
                                            </div>
                                            <div
                                                class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                                <div class="deals_timer_title_container">
                                                    <div class="deals_timer_title">Thời hạn</div>
                                                    <div class="deals_timer_subtitle">Kết thúc sau:</div>
                                                </div>
                                                <div class="deals_timer_content ml-auto">
                                                    <div class="deals_timer_box clearfix" data-target-time="">
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                            <span>giờ</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                            <span>phút</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                            <span>giây</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Deals Item -->
                                    <div class="owl-item deals_item">
                                        <div class="deals_image"><img src="images/deals.png" alt=""></div>
                                        <div class="deals_content">
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_category"><a href="#">Apple</a></div>
                                                <div class="deals_item_price_a ml-auto"></div>
                                            </div>
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_name">iPhone 11</div>
                                                <div class="deals_item_price ml-auto">38.990.000 <sup>Vnđ</sup></div>
                                            </div>
                                            <div class="available">
                                                <div class="available_line d-flex flex-row justify-content-start">
                                                    <div class="available_title">Available: <span>6</span></div>
                                                    <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                                </div>
                                                <div class="available_bar"><span style="width:17%"></span></div>
                                            </div>
                                            <div
                                                class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                                <div class="deals_timer_title_container">
                                                    <div class="deals_timer_title">Hurry Up</div>
                                                    <div class="deals_timer_subtitle">Offer ends in:</div>
                                                </div>
                                                <div class="deals_timer_content ml-auto">
                                                    <div class="deals_timer_box clearfix" data-target-time="">
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer2_hr" class="deals_timer_hr"></div>
                                                            <span>hours</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer2_min" class="deals_timer_min"></div>
                                                            <span>mins</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer2_sec" class="deals_timer_sec"></div>
                                                            <span>secs</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Deals Item -->
                                    <!-- Deals Item -->
                                    <div class="owl-item deals_item">
                                        <div class="deals_image"><img
                                                src="https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-191020-021035-400x400.jpg"
                                                alt=""></div>
                                        <div class="deals_content">
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_category"><a href="#">Apple</a></div>
                                                <div class="deals_item_price_a ml-auto"></div>
                                            </div>
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_name">Iphone 12</div>
                                                <div class="deals_item_price ml-auto">43.000.000 <sup>Vnđ</sup> </div>
                                            </div>
                                            <div class="available">
                                                <div class="available_line d-flex flex-row justify-content-start">
                                                    <div class="available_title">Đã bán: <span>6</span></div>
                                                    <div class="sold_title ml-auto">Số lượng còn: <span>28</span></div>
                                                </div>
                                                <div class="available_bar"><span style="width:17%"></span></div>
                                            </div>
                                            <div
                                                class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                                <div class="deals_timer_title_container">
                                                    <div class="deals_timer_title">Thời hạn</div>
                                                    <div class="deals_timer_subtitle">Kết thúc sau:</div>
                                                </div>
                                                <div class="deals_timer_content ml-auto">
                                                    <div class="deals_timer_box clearfix" data-target-time="">
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                            <span>giờ</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                            <span>phút</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                            <span>giây</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="deals_slider_nav_container">
                                <div class="deals_slider_prev deals_slider_nav"><i
                                        class="fas fa-chevron-left ml-auto"></i></div>
                                <div class="deals_slider_next deals_slider_nav"><i
                                        class="fas fa-chevron-right ml-auto"></i></div>
                            </div>
                        </div>

                        <!-- Featured -->
                        <div class="featured">
                            <div class="tabbed_container">
                                <div class="tabs">
                                    <ul class="clearfix">
                                        <li class="active">Nổi bật</li>
                                        <li>Khuyến mãi</li>
                                        <li>Bán chạy</li>
                                    </ul>
                                    <div class="tabs_line"><span></span></div>
                                </div>

                                <!-- Product Panel -->

                                <!-- Product Panel -->

                                <div class="product_panel panel">
                                    <div class="featured_slider slider">

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_1.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price discount">$225<span>$300</span></div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_2.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Apple iPod shuffle</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button active">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_3.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Sony MDRZX310W</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_4.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price discount">$225<span>$300</span></div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">LUNA Smartphone</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_5.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Canon STM Kit...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_6.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Samsung J330F...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_7.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Lenovo IdeaPad</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_8.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Digitus EDNET...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_1.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_2.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_3.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_4.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_5.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_6.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_7.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_8.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="featured_slider_dots_cover"></div>
                                </div>

                                <!-- Product Panel -->

                                <div class="product_panel panel">
                                    <div class="featured_slider slider">

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_1.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price discount">$225<span>$300</span></div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_2.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Apple iPod shuffle</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button active">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_3.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Sony MDRZX310W</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_4.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price discount">$225<span>$300</span></div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">LUNA Smartphone</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_5.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Canon STM Kit...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_6.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Samsung J330F...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_7.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Lenovo IdeaPad</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_8.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Digitus EDNET...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_1.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_2.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_3.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_4.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_5.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_6.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_7.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="images/featured_8.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="featured_slider_dots_cover"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Popular Categories -->

        <div class="popular_categories">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="popular_categories_content">
                            <div class="popular_categories_title">Danh Mục <br> Phổ Biến</div>
                            <div class="popular_categories_slider_nav">
                                <div class="popular_categories_prev popular_categories_nav"><i
                                        class="fas fa-angle-left ml-auto"></i></div>
                                <div class="popular_categories_next popular_categories_nav"><i
                                        class="fas fa-angle-right ml-auto"></i></div>
                            </div>
                            <!-- div class="popular_categories_link"><a href="#">full catalog</a></div> -->
                        </div>
                    </div>

                    <!-- Popular Categories Slider -->

                    <div class="col-lg-9">
                        <div class="popular_categories_slider_container">
                            <div class="owl-carousel owl-theme popular_categories_slider">

                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div
                                        class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img src="images/popular_1.png" alt="">
                                        </div>
                                        <div class="popular_category_text">Điện thoại <br> Máy tính bảng</div>
                                    </div>
                                </div>

                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div
                                        class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img src="images/popular_2.png" alt="">
                                        </div>
                                        <div class="popular_category_text">Máy Tính Laptops</div>
                                    </div>
                                </div>

                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div
                                        class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img src="images/popular_3.png" alt="">
                                        </div>
                                        <div class="popular_category_text">Máy nghe nhạc</div>
                                    </div>
                                </div>

                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div
                                        class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img src="images/popular_4.png" alt="">
                                        </div>
                                        <div class="popular_category_text">Cầm tay chơi game</div>
                                    </div>
                                </div>

                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div
                                        class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img src="images/popular_5.png" alt="">
                                        </div>
                                        <div class="popular_category_text">Tai nghe</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Banner -->

        <div class="banner_2">
            <div class="banner_2_background" style="background-image:url(images/banner_2_background.jpg)"></div>
            <div class="banner_2_container">
                <div class="banner_2_dots"></div>
                <!-- Banner 2 Slider -->

                <div class="owl-carousel owl-theme banner_2_slider">

                    <!-- Banner 2 Slider Item -->
                    <div class="owl-item">
                        <div class="banner_2_item">
                            <div class="container fill_height">
                                <div class="row fill_height">
                                    <div class="col-lg-4 col-md-6 fill_height">
                                        <div class="banner_2_content">
                                            <div class="banner_2_category">Iphone</div>
                                            <div class="banner_2_title">Iphone 12 Pro Max</div>
                                            <div class="banner_2_text">iPhone 12 Pro sẽ nói không với tai thỏ, thiết kế
                                                mạnh mẽ hơn</div>
                                            <div class="rating_r rating_r_4 banner_2_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="button banner_2_button"><a href="#">Xem thêm</a></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-8 col-md-6 fill_height">
                                        <div class="banner_2_image_container">
                                            <div class="banner_2_image"><img
                                                    src="https://o.remove.bg/downloads/b7fb18f4-df38-4ac6-ad65-be927808077d/12pro-removebg-preview.png"
                                                    alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Banner 2 Slider Item -->
                    <div class="owl-item">
                        <div class="banner_2_item">
                            <div class="container fill_height">
                                <div class="row fill_height">
                                    <div class="col-lg-4 col-md-6 fill_height">
                                        <div class="banner_2_content">
                                            <div class="banner_2_category">Apple</div>
                                            <div class="banner_2_title">Iphone 11</div>
                                            <div class="banner_2_text">Công nghệ hiển thị: Màn hình cảm ứng điện dung
                                                Liquid Retina IPS LCD, 16 triệu màuĐộ phân giải: 828 x 1792 pixels Màn
                                                hình rộng: 6.1 inches IPS LCD Mặt kính cảm ứng: Kính chống trầy xước,
                                                lớp phủ oleophobic</div>
                                            <div class="rating_r rating_r_4 banner_2_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="button banner_2_button"><a href="#">Xem thêm</a></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-8 col-md-6 fill_height">
                                        <div class="banner_2_image_container">
                                            <div class="banner_2_image"><img
                                                    src="https://lh3.googleusercontent.com/proxy/IyY3bwyxVzei5Ov3Ua0IzpjldF9GI21vRLXxXOlKVAsp_9PyO_n1HiXstjG7LT1dA2Y2YbpumDHoMJwnzEpifR5pQXxwuZm-NOqyqH05zT55x3KUDCOsaG3IyBBG33xDl9f9WLI5MqO_"
                                                    alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Banner 2 Slider Item -->
                    <div class="owl-item">
                        <div class="banner_2_item">
                            <div class="container fill_height">
                                <div class="row fill_height">
                                    <div class="col-lg-4 col-md-6 fill_height">
                                        <div class="banner_2_content">
                                            <div class="banner_2_category">Apple</div>
                                            <div class="banner_2_title">Iphone 11 - 64 GB </div>
                                            <div class="banner_2_text">iPhone 11 được trang bị hệ thống camera kép đột
                                                phá với camera ống kính siêu rộng Ultra Wide và camera ống kính rộng
                                                Wide mang lại những video và bức ảnh tuyệt vời. </div>
                                            <div class="rating_r rating_r_4 banner_2_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="button banner_2_button"><a href="#">Xem thêm</a></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-8 col-md-6 fill_height">
                                        <div class="banner_2_image_container">
                                            <div class="banner_2_image"><img
                                                    src="https://o.remove.bg/downloads/0a814641-e70a-4f95-8ce0-b772f3b54d08/pngtree-iphone-11-png-png-image_1730413-removebg-preview.png"
                                                    alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- Product Panel -->
        <div class="product_panel panel">
            <div class="arrivals_slider slider">

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_1.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$225</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount">-25%</li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_2.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$379</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button active">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_3.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$379</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_4.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$225</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_5.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$225</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_6.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$379</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_7.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$379</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount">-25%</li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_8.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$225</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_1.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$225</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_2.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$379</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_3.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$379</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_4.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$225</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_5.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$225</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_6.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$379</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_7.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$379</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_8.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$225</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="arrivals_slider_dots_cover"></div>
        </div>

        <!-- Product Panel -->
        <div class="product_panel panel">
            <div class="arrivals_slider slider">

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_1.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$225</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount">-25%</li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_2.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$379</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button active">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_3.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$379</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_4.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$225</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_5.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$225</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_6.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$379</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_7.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$379</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount">-25%</li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_8.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$225</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_1.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$225</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_2.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$379</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_3.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$379</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_4.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$225</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_5.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$225</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_6.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$379</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_7.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$379</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                src="images/new_8.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_price">$225</div>
                            <div class="product_name">
                                <div><a href="product.html">Huawei MediaPad...</a></div>
                            </div>
                            <div class="product_extras">
                                <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount"></li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="arrivals_slider_dots_cover"></div>
        </div>

    </div>



    </div>

    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Best Sellers -->

    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Sản phẩm bán chạy</div>
                            <ul class="clearfix">
                                <li class="active">Top 20</li>
                                <li>Audio & Video</li>
                                <li>Laptops & Computers</li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <div class="bestsellers_panel panel active">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-191020-021035-600x600.jpg"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Iphone</a></div>
                                            <div class="bestsellers_name"><a href="product.html">iPhone 12 Pro Max</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">43.990.000₫<span></span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="https://cdn.tgdd.vn/Products/Images/42/224859/samsung-galaxy-s20-fan-edition-242020-012039-600x600.jpg"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Samsung</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Samsung Galaxy S20</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">15.990.000₫<span>s</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="https://cdn.tgdd.vn/Products/Images/42/222596/oppo-reno4-275620-035629-600x600.jpg"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">OPPO</a></div>
                                            <div class="bestsellers_name"><a href="product.html">OPPO Reno4</a></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">8.490.000₫<span></span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Samsung</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Samsung Charm Gold</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">9.000.000 đ<span></span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="https://cdn.tgdd.vn/Products/Images/42/222596/oppo-reno4-275620-035629-600x600.jpg"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">OPPO</a></div>
                                            <div class="bestsellers_name"><a href="product.html">OPPO Reno4</a></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">8.490.000₫<span></span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-191020-021035-600x600.jpg"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Iphone</a></div>
                                            <div class="bestsellers_name"><a href="product.html">iPhone 12 Pro Max</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">43.990.000₫<span></span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_2.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_3.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="bestsellers_panel panel">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_2.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_3.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_2.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_3.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="bestsellers_panel panel">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_2.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_3.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_2.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_3.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Adverts -->

    <div class="adverts">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 advert_col">

                    <!-- Advert Item -->

                    <div class="advert d-flex flex-row align-items-center justify-content-start">
                        <div class="advert_content">
                            <div class="advert_title"><a href="#">Trends 2020</a></div>
                            <div class="advert_text">Iphone 11, Iphone 12 ....</div>
                        </div>
                        <div class="ml-auto">
                            <div class="advert_image"><img src="images/adv_1.png" alt=""></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 advert_col">

                    <!-- Advert Item -->

                    <div class="advert d-flex flex-row align-items-center justify-content-start">
                        <div class="advert_content">
                            <div class="advert_subtitle">Trends 2020</div>
                            <div class="advert_title_2"><a href="#">Sale -45%</a></div>
                            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                        </div>
                        <div class="ml-auto">
                            <div class="advert_image"><img src="images/adv_2.png" alt=""></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 advert_col">

                    <!-- Advert Item -->

                    <div class="advert d-flex flex-row align-items-center justify-content-start">
                        <div class="advert_content">
                            <div class="advert_title"><a href="#">Trends 2020</a></div>
                            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                        </div>
                        <div class="ml-auto">
                            <div class="advert_image"><img src="images/adv_3.png" alt=""></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--  -->
    <!-- Reviews -->

    <!--  -->

    <!-- Recently Viewed -->


    <!-- Brands -->

    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container">

                        <!-- Brands Slider -->

                        <div class="owl-carousel owl-theme brands_slider">

                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_1.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_2.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_3.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_4.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_5.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_6.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_7.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_8.jpg" alt=""></div>
                            </div>

                        </div>

                        <!-- Brands Slider Navigation -->
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div
                        class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_icon"><img src="images/send.png" alt=""></div>
                            <div class="newsletter_title">Đăng nhập để nhận ưu đãi</div>
                            <div class="newsletter_text">
                                <p> Khuyến mãi 10%</p>
                            </div>
                        </div>
                        <div class="newsletter_content clearfix">
                            <form action="#" class="newsletter_form">
                                <input type="email" class="newsletter_input" required="required"
                                    placeholder="Nhập email của bạn">
                                <button class="newsletter_button">Đăng ký</button>
                            </form>
                            <div class="newsletter_unsubscribe_link"><a href="#">Bỏ đăng ký</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 footer_col">
                    <div class="footer_column footer_contact">
                        <div class="logo_container">
                            <div class="logo"><a href="/index.html">Ibuy</a></div>
                        </div>
                        <div class="footer_title">Hỗ trợ 24/7</div>
                        <div class="footer_phone">+84 345678</div>
                        <div class="footer_contact_text">
                            <p>137 Nguyễn Thị Thập</p>
                            <p>Phường Hòa Minh, TP Đà Nẵng</p>
                        </div>
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 offset-lg-2">
                    <div class="footer_column">
                        <div class="footer_title">Tất cả danh mục</div>
                        <ul class="footer_list">
                            <li><a href="#">Máy tính & laptop</a></li>
                            <li><a href="#">Điện Thoại</a></li>
                            <li><a href="#">Iphone</a></li>

                        </ul>
                        <!-- <div class="footer_subtitle">Gadgets</div> -->
                        <ul class="footer_list">
                            <li><a href="#">Xiaomi</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column">
                        <ul class="footer_list footer_list_2">
                            <li><a href="#">Realme</a></li>
                            <li><a href="#">Vsmart</a></li>
                            <li><a href="#">Oppo</a></li>
                            <li><a href="#">Nokia</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column">
                        <div class="footer_title">Điều Khoản</div>
                        <ul class="footer_list">
                            <li><a href="#">Tài khoản</a></li>
                            <li><a href="#">Đơn hàng</a></li>
                            <li><a href="#">Hỏi đáp</a></li>
                            <li><a href="#">Miễn phí vận chuyển</a></li>
                            <li><a href="#">Đổi trả</a></li>
                            <li><a href="#">Trả góp</a></li>
                            <li><a href="#">Hỗ trợ</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Copyright -->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div
                        class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                        <div class="copyright_content">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy; All rights Ibuy
                        </div>
                        <div class="logos ml-sm-auto">
                            <ul class="logos_list">
                                <li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
                                <li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
                                <li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
                                <li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="{{asset('public/frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/frontend/styles/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('public/frontend/styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{asset('public/frontend/plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{asset('public/frontend/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('public/frontend/plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{asset('public/frontend/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{asset('public/frontend/plugins/slick-1.8.0/slick.js')}}"></script>
    <script src="{{asset('public/frontend/plugins/easing/easing.js')}}"></script>
    <script src="{{asset('public/frontend/js/custom.js')}}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>

</body>


<!-- Mirrored from preview.colorlib.com/theme/Ibuy/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Oct 2020 02:31:58 GMT -->

</html>
