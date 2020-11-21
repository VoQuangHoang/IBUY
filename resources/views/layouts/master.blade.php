<!DOCTYPE html>
<html lang="en">

<head>
    <title>iBuy-Điện thoại thoại di động thông minh</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/bootstrap4/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/slick-1.8.0/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/product_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/product_responsive.css')}}">

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
                                <div class="top_bar_icon"><img src="{{asset('public/frontend/images/phone.png')}}" alt=""></div>(+84)
                                090 123 4567
                            </div>
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="{{asset('public/frontend/images/mail.png')}}" alt=""></div><a
                                    href="mailto:fastsales@gmail.com">ibuysupport@gmail.com</a>
                            </div>
                            <div class="top_bar_content ml-auto">
                                <!-- <div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									<li>
										<a href="#">English<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">Italian</a></li>
											<li><a href="#">Spanish</a></li>
											<li><a href="#">Japanese</a></li>
										</ul>
									</li>
									<li>
										<a href="#">$ US dollar<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">EUR Euro</a></li>
											<li><a href="#">GBP British Pound</a></li>
											<li><a href="#">JPY Japanese Yen</a></li>
										</ul>
									</li>
								</ul>
							</div> -->
                                <div class="top_bar_user">
                                @guest
                                    <div class="user_icon"><img src="images/user.svg" alt=""></div>
                                    <div><a href="{{ route('register') }}">Đăng ký</a></div>
                                    <div><a href="{{ route('login') }}">Đăng nhập</a></div>
                                @else 
                                <div>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Đăng Xuất
                                        <div>| {{ Auth::user()->name }}</div>
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
                                <div class="logo"><a href="#">iBuy</a></div>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix">
                                            <input type="search" required="required" class="header_search_input"
                                                placeholder="Tìm kiếm sản phẩm...">
                                            <div class="custom_dropdown">
                                                <div class="custom_dropdown_list">
                                                    <span class="custom_dropdown_placeholder clc"></span>
                                                    <!-- <i class="fas fa-chevron-down"></i> -->
                                                    <ul class="custom_list clc">
                                                        <li><a class="clc" href="#"></a></li>
                                                        <li><a class="clc" href="#"></a></li>
                                                        <li><a class="clc" href="#"></a></li>
                                                        <li><a class="clc" href="#"></a></li>
                                                        <li><a class="clc" href="#"></a></li>
                                                        <li><a class="clc" href="#"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300"
                                                value="Submit"><img src="{{asset('public/frontend/images/search.png')}}"
                                                    alt=""></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist -->
                        <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                            <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                    <div class="wishlist_icon"></div>
                                    <div class="wishlist_content">
                                        <div class="wishlist_text"><a href="#"><i class="far fa-user"
                                                    style="font-size:24px; color: #0e8ce4"></i> Tài khoản</a></div>
                                        <!-- <div class="wishlist_count"></div> -->
                                    </div>
                                </div>

                                <!-- Cart -->
                                <div class="cart">
                                    <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                        <div class="cart_icon">

                                            <!-- <img src="{{asset('public/frontend/images/cart.png')}}" alt="">
										<div class="cart_count"><span>10</span></div> -->
                                        </div>
                                        <div class="cart_content">
                                            <div class="cart_text"><a href="#"><i class="fas fa-shopping-cart"
                                                        style="font-size:24px; color: #0e8ce4"></i> Giỏ hàng</a></div>
                                            <!-- <div class="cart_price"></div> -->
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
										@foreach($loai_sp as $loai)
											<li><a href="#">{{$loai->name_category}}<i class="fas fa-chevron-right ml-auto"></i></a></li>
                                        @endforeach
                                        <!-- <li><a href="#">Computers & Laptops<i class="fas fa-chevron-right ml-auto"></i></a></li>
                                        <li><a href="#">Cameras & Photos<i class="fas fa-chevron-right"></i></a></li> -->
                                        <!-- <li class="hassubs">
										<a href="#">Hardware<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="hassubs">
												<a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li> -->
                                    </ul>
                                </div>

                                <!-- Main Nav Menu -->

                                <div class="main_nav_menu m-auto">
                                    <ul class="standard_dropdown main_nav_dropdown">
                                        <li><a href="#">Trang chủ <i class="fas fa-chevron-down"></i></a></li>
                                        <!-- <li class="hassubs">
										<a href="#">Super Deals<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li> -->
                                        <!-- <li class="hassubs">
										<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li> -->
                                        <li><a href="blog.html">Sản phẩm<i class="fas fa-chevron-down"></i></a></li>
                                        <li><a href="blog.html">Giới thiệu<i class="fas fa-chevron-down"></i></a></li>
                                        <li><a href="contact.html">Liên hệ<i class="fas fa-chevron-down"></i></a></li>
                                    </ul>
                                </div>

                                <!-- Menu Trigger -->

                                <div class="menu_trigger_container ml-auto">
                                    <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
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

            <div class="page_menu">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="page_menu_content">

                                <div class="page_menu_search">
                                    <form action="#">
                                        <input type="search" required="required" class="page_menu_search_input"
                                            placeholder="Search for products...">
                                    </form>
                                </div>
                                <ul class="page_menu_nav">
                                    <!-- <li class="page_menu_item has-children">
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
								</li> -->
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
                                    <li class="page_menu_item"><a href="blog.html">blog<i
                                                class="fa fa-angle-down"></i></a></li>
                                    <li class="page_menu_item"><a href="contact.html">contact<i
                                                class="fa fa-angle-down"></i></a></li>
                                </ul>

                                <div class="menu_contact">
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>
                                        +38 068 005 3570
                                    </div>
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a
                                            href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        @yield('maincontent')

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
                                            src="{{asset('public/frontend/images/brands_1.jpg')}}" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="{{asset('public/frontend/images/brands_2.jpg')}}" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="{{asset('public/frontend/images/brands_3.jpg')}}" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="{{asset('public/frontend/images/brands_4.jpg')}}" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="{{asset('public/frontend/images/brands_5.jpg')}}" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="{{asset('public/frontend/images/brands_6.jpg')}}" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="{{asset('public/frontend/images/brands_7.jpg')}}" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="{{asset('public/frontend/images/brands_8.jpg')}}" alt=""></div>
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

		<!-- Characteristics -->

        <div class="characteristics">
            <div class="container">
                <div class="row">

                    <!-- Char. Item -->
                    <div class="col-lg-3 col-md-6 char_col">

                        <div class="char_item d-flex flex-row align-items-center justify-content-start">
                            <div class="char_icon"><img src="{{asset('public/frontend/images/char_1.png')}}" alt=""></div>
                            <div class="char_content">
                                <div class="char_title">Free Delivery</div>
                                <div class="char_subtitle">from $50</div>
                            </div>
                        </div>
                    </div>

                    <!-- Char. Item -->
                    <div class="col-lg-3 col-md-6 char_col">

                        <div class="char_item d-flex flex-row align-items-center justify-content-start">
                            <div class="char_icon"><img src="{{asset('public/frontend/images/char_2.png')}}" alt=""></div>
                            <div class="char_content">
                                <div class="char_title">Free Delivery</div>
                                <div class="char_subtitle">from $50</div>
                            </div>
                        </div>
                    </div>

                    <!-- Char. Item -->
                    <div class="col-lg-3 col-md-6 char_col">

                        <div class="char_item d-flex flex-row align-items-center justify-content-start">
                            <div class="char_icon"><img src="{{asset('public/frontend/images/char_3.png')}}" alt=""></div>
                            <div class="char_content">
                                <div class="char_title">Free Delivery</div>
                                <div class="char_subtitle">from $50</div>
                            </div>
                        </div>
                    </div>

                    <!-- Char. Item -->
                    <div class="col-lg-3 col-md-6 char_col">

                        <div class="char_item d-flex flex-row align-items-center justify-content-start">
                            <div class="char_icon"><img src="{{asset('public/frontend/images/char_4.png')}}" alt=""></div>
                            <div class="char_content">
                                <div class="char_title">Free Delivery</div>
                                <div class="char_subtitle">from $50</div>
                            </div>
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
                                <div class="newsletter_title">Đăng ký để nhận tin mới nhất</div>
                                <div class="newsletter_text">
                                    <p>...và có thể nhận được cơ hội khuyến mãi.</p>
                                </div>
                            </div>
                            <div class="newsletter_content clearfix">
                                <form action="#" class="newsletter_form">
                                    <input type="email" class="newsletter_input" required="required"
                                        placeholder="Nhập địa chỉ mail của bạn">
                                    <button class="newsletter_button">Đăng ký</button>
                                </form>
                                <div class="newsletter_unsubscribe_link"><a href="#">hủy đăng ký</a></div>
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
                                <div class="logo"><a href="#">iBuy</a></div>
                            </div>
                            <div class="footer_title">Hỗ trợ 24/7</div>
                            <div class="footer_phone">(+84) 090 123 4578</div>
                            <div class="footer_contact_text">
                                <p>17 Nguyễn Thị Thập</p>
                                <p>Phường Hòa Minh, TP Đà Nẵng, Việt Nam</p>
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
                                <li><a href="#">Samsung</a></li>
                                <li><a href="#">Samsung</a></li>
                                <li><a href="#">Samsung</a></li>
                                <li><a href="#">Samsung</a></li>
                                <li><a href="#">Samsung</a></li>
                            </ul>
                            <div class="footer_subtitle">Samsung</div>
                            <ul class="footer_list">
                                <li><a href="#">Samsung</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer_column">
                            <ul class="footer_list footer_list_2">
                                <li><a href="#">Apple</a></li>
                                <li><a href="#">Apple</a></li>
                                <li><a href="#">Apple</a></li>
                                <li><a href="#">Apple</a></li>
                                <li><a href="#">Apple</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer_column">
                            <div class="footer_title">Chăm sóc khách hàng</div>
                            <ul class="footer_list">
                                <li><a href="#">Tài khoản</a></li>
                                <li><a href="#">Kiểm tra đơn hàng</a></li>
                                <li><a href="#">Dịch vụ khách hàng</a></li>
                                <li><a href="#">Đổi/Trả sản phẩm</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Hỗ trợ sản phẩm</a></li>
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
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> All rights reserved
                                <!-- | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>. Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a> -->
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
</body>

</html>
