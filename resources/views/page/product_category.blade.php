@extends('layouts.master')
@section('maincontent')

<!-- Home -->

<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('public/frontend/images/shop_background2.jpg')}}"></div>
		<!-- <div class="home_overlay"></div> -->
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title" style="text-transform: uppercase;">{{$category->name_category}}</h2>
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
							<div class="shop_product_count"><span>{{count($product_type)}}</span> sản phẩm thuộc hãng <span class="text-uppercase">{{$category->name_category}}</span></div>
						</div>

						<div class="product_grid">
							<div class="product_grid_border"></div>

							<!-- Product Item -->
							@foreach($product_type as $product)
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('public/uploads/product/' . $product->image_product)}}" alt="" width="80"></div>
								<div class="product_content">
									<div class="product_price">{{number_format($product->price_product, 0, ',', '.').'₫'}}</div>
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

						<div class="shop_page_nav d-flex flex-row">
                            <div class="row justify-content-center" style="width: 100%;">{{ $product_type->links() }}</div>
                        </div>

					</div>

				</div>
			</div>
		</div>
	</div>

@endsection
