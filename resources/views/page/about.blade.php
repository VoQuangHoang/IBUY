@extends('layouts.master')
@section('maincontent')
<!-- Home -->

<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('public/frontend/images/shop_background2.jpg')}}"></div>
		<!-- <div class="home_overlay"></div> -->
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">GIỚI THIỆU</h2>
		</div>
	</div>
<!-- Single Blog Post -->

<div class="single_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="single_post_title">THƯƠNG HIỆU VÀ GIÁ TRỊ MANG LẠI CHO KHÁCH HÀNG</div>
					<div class="single_post_text">
						<p>
                            Khi khoa học kỹ thuật được cải tiến và công nghệ phát triển không ngừng thì đó cũng là
                            lúc những chiếc điện thoại trở nên quan trọng hơn bao giờ hết. Thật vậy chúng ta có thể
                            làm được nhiều việc khác nhau như gọi điện, nhắn tin, soạn tài liệu (Word, Excel, ...),
                            quay phim, chụp ảnh, chình sửa ảnh chuyên nghiệp, xem phim, chơi game hay tìm kiếm
                            và mua một thứ gì đó trên các trang web thương mại điện tử với thiết bị có thể có kích thước
                            không quá bàn tay.
                        </p>

						<div class="single_post_quote text-center">
							<div class="quote_image"><img src="public/frontend/images/quote.png" alt=""></div>
							<div class="quote_text">Giá cả tốt, sản phẩm chất lượng, uy tín được xem là yếu tố hàng đầu mà IBUY đem đến cho khách hàng. Hãy đến với
                                chúng tôi và bạn sẽ nhận được nó.
                            </div>
							<div class="quote_name">IBUY</div>
						</div>

						<p> Nắm bắt được những như cầu như vậy của khách hàng chúng tôi đã đem đến website bán hàng trực tuyến
                            và thiết bị di dộng thông minh (smartphone), chức năng chính của website chúng tôi đó là giới thiệu
                            những thiết bị di dộng của cửa hàng đang kinh doanh tiếp cận đến những khách hàng quan tâm và muốn tìm 
                            hiểu về chúng trước khi quyết định mua. Chúng tôi đem đến những thông tin mới nhất về sản phẩm như mô tả chức năng
                        , giá cả, thông tin về những người dùng trước đó. Ngoài ra, thông qua website còn mang lại hiệu quả cao về quảng cáo, 
                        quảng bá cửa hàng đem đến lượng khách hàng tiềm năng, dễ dàng chăm sóc khách hàng và tiết kiệm rất nhiều chi phí phát
                         sinh nhằm đem đến giá cả và dịch vụ tốt nhất cho khách hàng.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection