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
                    <li data-image="{{asset('public/uploads/product/' . $detail->image_product)}}"><img
                            src="{{asset('public/uploads/product/' . $detail->image_product)}}" alt=""></li>
                    <!-- <li data-image="{{asset('public/uploads/product/' . $detail->image_product)}}"><img
                            src="{{asset('public/uploads/product/' . $detail->image_product)}}" alt=""></li>
                    <li data-image="{{asset('public/uploads/product/' . $detail->image_product)}}"><img
                            src="{{asset('public/uploads/product/' . $detail->image_product)}}" alt=""></li> -->
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
                        <!-- <p>{{$detail->description_product}}</p> -->
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

                            <div class="product_price2">{{number_format($detail->price_product, 0, ',', '.')}} VNĐ</div>
                            <div class="button_container">
                                <button type="submit" class="button cart_button">Mua Ngay</button>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="row" style="padding-top: 30px;">
            <div class="col-lg-12">
                <section class="product_description_area">
                    <div class="container">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="false">Mô tả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="true">Bình luận</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p style="font-size:16px; padding: 0px;text-align: justify;">
                                    {!!$detail->description_product!!}
                                    
                                </p>
                            </div>
                            <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="comment_list">
                                            @if(count($comments)==0)
                                            <div class="" style="font-size:16px;">
                                                <i class="fas fa-comment-slash" style="color:#0e8ce4;"></i> Sản phẩm chưa có bình luận nào. Hãy là người đầu tiên bình luận về sản phẩm này.
                                            </div>
                                            @endif
                                            @foreach($comments as $cmt)
                                            <div class="review_item">
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="{{asset('public/uploads/user/' . $cmt->image)}}" alt="" width="30" /> 
                                                    </div>
                                                    <div class="media-body">
                                                        <h4>{{$cmt->name}}</h4>
                                                        <h5>{{date_format($cmt->updated_at, 'd-m-Y')}}</h5>
                                                        
                                                    </div>
                                                </div>
                                                <p>
                                                    {{$cmt->content}}
                                                </p>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="review_box">
                                            <h6><i class="fas fa-comment" style="color:#0e8ce4;"></i> Đăng bình luận của bạn</h6>
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            </div>
                                            @endif
                                            @if(session()->get('success'))
                                                <div class="alert alert-success">
                                                {{ session()->get('success') }}  
                                                </div>
                                            @endif
                                            <form class="row contact_form" style="padding-top:0" action="{{URL::to('/add-comment/'.$detail->id_product)}}" method="post"
                                                id="contactForm">
                                                {{csrf_field()}}
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="content" id="content"
                                                            rows="3" placeholder="Nội dung bình luận"></textarea>
                                                    </div>
                                                    <input type="hidden" value="{{$detail->id_product}}" name="id_product">
                                                </div>
                                                <div class="col-md-12 text-right">
                                                    <button type="submit" value="submit" class="btn btn-primary">
                                                        Gửi
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
