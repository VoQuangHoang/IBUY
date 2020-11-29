@extends('layouts.master')
@section('maincontent')
<!-- Single Product -->

<div class="single_product">
    <div class="container">
        @foreach($product_detail as $detail)
        <div class="row">

            <!-- Images -->
            <div class="col-lg-2 order-lg-1 order-2">
                <ul class="image_list">
                    <li data-image="images/single_4.jpg"><img
                            src="{{asset('public/uploads/product/' . $detail->image_product)}}" alt=""></li>
                    <li data-image="images/single_2.jpg"><img
                            src="{{asset('public/uploads/product/' . $detail->image_product)}}" alt=""></li>
                    <li data-image="images/single_3.jpg"><img
                            src="{{asset('public/uploads/product/' . $detail->image_product)}}" alt=""></li>
                </ul>
            </div>

            <!-- Selected Image -->
            <div class="col-lg-5 order-lg-2 order-1">
                <div class="image_selected"><img src="{{asset('public/uploads/product/' . $detail->image_product)}}"
                        alt=""></div>
            </div>

            <!-- Description -->

            <div class="col-lg-5 order-3">
                <div class="product_description">
                    <div class="product_category">Điện thoại</div>
                    <div class="product_name">{{$detail -> name_product}}</div>
                    <div class="rating_r rating_r_4 product_rating"></div>
                    <div class="product_text">
                        <p>{{$detail->description_product}}</p>
                    </div>
                    <div class="order_info d-flex flex-row">
                        <form action="{{URL::to('/save_cart')}}" method="post">
                            {{ csrf_field() }}
                            <div class="clearfix" style="z-index: 1000;">

                                <!-- Product Quantity -->
                                <div class="product_quantity clearfix">
                                    <span>Số lượng: </span>
                                    <input id="quantity_input" name="qty" type="number" pattern="[0-9]*" min="1" value="1">
                                    <div class="quantity_buttons">
                                        <div id="quantity_inc_button" class="quantity_inc quantity_control"><i
                                                class="fas fa-chevron-up"></i></div>
                                        <div id="quantity_dec_button" class="quantity_dec quantity_control"><i
                                                class="fas fa-chevron-down"></i></div>
                                    </div>
                                    <input type="hidden" name="productid_hidden" value="{{$detail -> id_product}}">
                                </div>

                                <!-- Product Color -->
                                <!-- <ul class="product_color">
										<li>
											<span>Color: </span>
											<div class="color_mark_container"><div id="selected_color" class="color_mark"></div></div>
											<div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

											<ul class="color_list">
												<li><div class="color_mark" style="background: #999999;"></div></li>
												<li><div class="color_mark" style="background: #b19c83;"></div></li>
												<li><div class="color_mark" style="background: #000000;"></div></li>
											</ul>
										</li>
									</ul> -->

                            </div>

                            <div class="product_price">{{number_format($detail->price_product, 0, ',', '.')}} VNĐ</div>
                            <div class="button_container">
                                <button type="submit" class="button cart_button">Mua Ngay</button>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="product_description_area">
                    <div class="container">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">MÔ TẢ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">BÌNH LUẬN</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p style="font-size:20px; padding: 2px">
                                    {{$detail->description_product}}
                                </p>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="comment_list">
                                            <div class="review_item">
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="img/product/single-product/review-1.png" alt="" />
                                                    </div>
                                                    <div class="media-body">
                                                        <h4>Blake Ruiz</h4>
                                                        <h5>12th Feb, 2017 at 05:56 pm</h5>
                                                    </div>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                    ullamco laboris nisi ut aliquip ex ea commodo
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="review_box">
                                            <h3>Thêm bình luận</h3>
                                            <form class="row contact_form" action="contact_process.php" method="post"
                                                id="contactForm" novalidate="novalidate">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" id="message"
                                                            rows="1" placeholder="Nội dung bình luận"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-right">
                                                    <button type="submit" value="submit" class="btn btn-danger">
                                                        Đăng bình luận
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
