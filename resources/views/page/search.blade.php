@extends('layouts.master')
@section('maincontent')

<!-- Home -->

<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('public/frontend/images/shop_background2.jpg')}}"></div>
		<!-- <div class="home_overlay"></div> -->
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title" style="text-transform: uppercase;">Tìm kiếm sản phẩm</h2>
		</div>
	</div>

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				

				<div class="col-lg-12">
					
                    <!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
							@if (count($search_product)==0)
							<div class="shop_product_count">Không tìm thấy sản phẩm phù hợp với từ khóa "<span>{{$keywords}}</span>"</div>
							@else
							<div class="shop_product_count"><span>{{count($search_product)}}</span> sản phẩm được tìm thấy với từ khóa "<span>{{$keywords}}</span>"</div>
							@endif
						</div>

						<div class="product_grid">
							<div class="product_grid_border"></div>

							<!-- Product Item -->
							@foreach($search_product as $product)
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('public/uploads/product/' . $product->image_product)}}" alt="" width="80"></div>
								<div class="product_content">
									<div class="product_price">{{number_format($product->price_product, 0, ',', '.')}} VNĐ</div>
									<div class="product_name"><div><a href="{{URL::to('/product_detail/'.$product->id_product)}}" tabindex="0">{{$product->name_product}}</a></div></div>
								</div>
								<!-- <div class="product_fav"><i class="fas fa-heart"></i></div> -->
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
                            @endforeach


						</div>

						<!-- Shop Page Navigation -->

						

					</div>

				</div>
			</div>
		</div>
	</div>

@endsection
