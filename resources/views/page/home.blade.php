@extends('layouts.master')
@section('maincontent')
        <!-- Banner -->

        <div class="banner">
			<div class="container">
				<div class="row">
            <div class="banner_background" style="background-image:url(public/frontend/images/apple-iphone-12-banner.jpg)"></div>
            <div class="container fill_height">
                <div class="row fill_height">
                    <!-- <div class="banner_product_image"><img src="public/frontend/images/banner_product.png" alt=""></div> -->
                    <div class="col-lg-5 offset-lg-7 fill_height" style="text-align: end;">
                        <div class="banner_content">
                            <h2 class="banner_text">Apple Iphone 12 <br> Đã có hàng</h2>
                            <div class="banner_price">
                                <!-- <span></span> -->
                                Chỉ từ 21.990.000đ
                            </div>
                            <div class="banner_product_name">Apple Iphone 12 Series</div>
                            <div class="btn btn-light btn-lg banner_button"><a href="#">Shop Now</a></div>
                        </div>
                    </div>
                </div>
			</div>
			</div>
			</div>
        </div>

        <!-- Ads banner -->
        <div class="ads">
            <div class="container">
                <div class="row" style="padding: 10px 0px;">
                    <div class="col-md-8" style="padding: 0;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"
                            style="width: 100%;  margin-left: 15px;">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('public/frontend/images/banner3.png')}}" class=""
                                        alt="..." style="width:99%">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('public/frontend/images/banner1.png')}}"
                                        class="" alt="..." style="width:99%">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('public/frontend/images/banner2.png')}}" class=""
                                        alt="..." style="width:99%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-md-4" style="padding: 0;margin-left: 0px;">
                        <div class="quangcao" style="margin-left: 15px;">
                            <div class="anh1">
                                <img src="{{asset('public/frontend/images/banner4.png')}}" alt=""
                                    style="padding-bottom: 10px; width:100%;">
                            </div>
                            <div class="anh2">
                                <img src="{{asset('public/frontend/images/banner5.png')}}" alt="" style="width:100%">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

		<!-- Recently Viewed -->

        <div class="viewed">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="viewed_title_container">
                            <h3 class="viewed_title">SẢN PHẨM MỚI</h3>
                            <div class="viewed_nav_container">
                                <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                                <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                            </div>
                        </div>

                        <div class="viewed_slider_container">

                            <!-- Recently Viewed Slider -->

                            <div class="owl-carousel owl-theme viewed_slider">

                                <!-- Recently Viewed Item SALE-->
                                <!-- <div class="owl-item">
                                    <div
                                        class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="viewed_image"><img src="public/frontend/images/view_1.jpg" alt=""></div>
                                        <div class="viewed_content text-center">
                                            <div class="viewed_price">$225<span>$300</span></div>
                                            <div class="viewed_name"><a href="#">Beoplay H7</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">SALE</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div> -->


                                <!-- Recently Viewed Item NORMAL-->
                                <!-- <div class="owl-item">
                                    <div
                                        class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="viewed_image"><img src="public/frontend/images/view_3.jpg" alt=""></div>
                                        <div class="viewed_content text-center">
                                            <div class="viewed_price">$225</div>
                                            <div class="viewed_name"><a href="#">Samsung J730F...</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">-25%</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div> -->
                                @foreach($products as $product)
                                <!-- Recently Viewed Item NEW-->
                                <div class="owl-item">
                                    <div
                                        class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="viewed_image"><img src="{{asset('public/uploads/product/' . $product->image_product)}}" alt=""></div>
                                        <div class="viewed_content text-center">
                                            <div class="viewed_price">{{number_format($product->price_product, 0, ',', '.').'₫'}}</div>
                                            <div class="viewed_name" style="min-height: 42px;"><a href="{{URL::to('/product_detail/'.$product->id_product)}}">{{$product->name_product}}</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">-25%</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
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
                                <div class="new_arrivals_title">SẢN PHẨM KHUYẾN MÃI</div>
                                <ul class="clearfix">
                                    <li class="active">Khuyến mãi</li>
                                    <!-- <li>Audio & Video</li>
                                    <li>Laptops & Computers</li> -->
                                </ul>
                                <div class="tabs_line"><span></span></div>
                            </div>

                            <div class="bestsellers_panel panel active">

                                <!-- Best Sellers Slider -->

                                <div class="bestsellers_slider slider">

                                    <!-- Best Sellers Item -->
                                    <!-- <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a></div>
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
                                    </div> -->

                                    <!-- Best Sellers Item -->
                                    @foreach($products_sale as $product)
                                  
                                    
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="{{asset('public/uploads/product/' . $product->image_product)}}" alt="" style=" max-width: 100px;"></div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#"></a></div>
                                                <div class="bestsellers_name"><a href="{{URL::to('/product_detail/'.$product->id_product)}}">{{$product->name_product}}</a></div>
                                                <div class="rating_r rating_r_5 bestsellers_rating">
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                </div>
                                                <div class="bestsellers_price discount">{{number_format(($product->price_product*(1-($product->promotion_price/100))), 0, ',', '.').'₫'}} <span>{{number_format($product->price_product, 0, ',', '.').'₫'}}</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">{{$product->promotion_price}}%</li>
                                            <li class="bestsellers_mark bestsellers_new">new</li>
                                        </ul>
                                    </div>

                                    @endforeach

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

                        <div class="advert d-flex flex-row justify-content-start">
                            <div class="advert_content">
                                <div class="advert_subtitle">Tin mới</div>
                                <div class="ml-auto">
                                    <div class="advert_image"><img src="{{asset('public/frontend/images/new1.jpg')}}" alt=""></div>
                                </div><br>
                                <div class="advert_title">
                                    <a>Cách Galaxy Tab A7 làm mới trải nghiệm giải trí cho người trẻ</a>
                                </div>
                                <div class="advert_text">Màn hình lớn, hệ thống 4 loa âm thanh vòm Dolby Atmos, hiệu suất ổn hội tụ trong thiết kế tinh giản của Galaxy Tab A7 giúp làm mới trải nghiệm giải trí.
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-lg-4 advert_col">

                        <!-- Advert Item -->

                        <div class="advert d-flex flex-row align-items-center justify-content-start">
                            <div class="advert_content">
                                <div class="advert_subtitle">Tin mới</div>
                                <!-- <div class="advert_title_2"><a href="#">Sale -45%</a></div> -->
                                <div class="ml-auto">
                                    <div class="advert_image"><img src="{{asset('public/frontend/images/new2.jpg')}}" alt=""></div>
                                </div><br>
                                <div class="advert_title">
                                    <a>Note20 Ultra 5G giúp bạn làm việc, chơi game theo cách chưa từng có</a>
                                </div>
                                <div class="advert_text">Không chỉ giới thiệu bộ đôi Note20, tai nghe "hạt đậu", Tab S mới hay smartphone màn hình gập, sự kiện Unpacked của Samsung kể câu chuyện khác lạ về tương lai của người dùng.</div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-lg-4 advert_col">

                        <!-- Advert Item -->

                        <div class="advert d-flex flex-row justify-content-start">
                            <div class="advert_content">
                                <div class="advert_subtitle">Tin mới</div>
                                <div class="ml-auto">
                                    <div class="advert_image"><img src="{{asset('public/frontend/images/new3.jpg')}}" alt=""></div>
                                </div><br>
                                <div class="advert_title"><a href="#">Nhiều mẫu iPhone cũ đang giảm giá</a></div>
                                <div class="advert_text">Một số cửa hàng vừa giảm giá nhiều mẫu iPhone qua sử dụng, đáng chú ý như iPhone 11 Pro Max, iPhone 11 hay iPhone XR.</div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection