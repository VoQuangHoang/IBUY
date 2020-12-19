@extends('layouts.master')
@section('maincontent')
<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('public/frontend/images/shop_background2.jpg')}}"></div>
		<!-- <div class="home_overlay"></div> -->
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">LIÊN HỆ VỚI CHÚNG TÔI</h2>
		</div>
	</div>
<div class="contact_info">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div
                    class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

                    <!-- Contact Item -->
                    <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                        <div class="contact_info_image"><img src="public/frontend/images/contact_1.png" alt=""></div>
                        <div class="contact_info_content">
                            <div class="contact_info_title">Số điện thoại</div>
                            <div class="contact_info_text">(+84) 090 123 4567</div>
                        </div>
                    </div>

                    <!-- Contact Item -->
                    <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                        <div class="contact_info_image"><img src="public/frontend/images/contact_2.png" alt=""></div>
                        <div class="contact_info_content">
                            <div class="contact_info_title">Email</div>
                            <div class="contact_info_text">ibuysupport@gmail.com</div>
                        </div>
                    </div>

                    <!-- Contact Item -->
                    <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                        <div class="contact_info_image"><img src="public/frontend/images/contact_3.png" alt=""></div>
                        <div class="contact_info_content">
                            <div class="contact_info_title">Địa chỉ</div>
                            <div class="contact_info_text">137 Ngyễn Thị Thập, Đà Nẵng, Việt Nam</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Form -->

<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="contact_form_container">
                <?php
	$message = Session::get('message');
	if ($message){
	echo "<div class='"."alert"." alert-success'".">" . $message . "</div>";
	Session::put('message',null);
	}
	?>
                    <div class="contact_form_title">
                        <div class="card text-white bg-primary mb-3" >
                            <div class="card-header">Liên hệ với iBuy</div>
                        </div>
                    </div>

                    <form action="{{URL::to('add-contact')}}" id="contact_form" method="POST">
                        {{ csrf_field() }}
                        <div
                            class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                            <input type="text" id="contact_form_name" name="contact_name"
                                class="contact_form_name input_field" placeholder="Họ và tên" required="required"
                                data-error="Hãy nhập tên của bạn.">
                            <input type="email" id="contact_form_email" name="contact_email"
                                class="contact_form_email input_field" placeholder="Email"
                                required="required" data-error="Email is required.">
                            <input type="number" id="contact_form_phone" name="contact_phone"
                                class="contact_form_phone input_field" placeholder="Số điện thoại" required>
                        </div>
                        <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                        <input type="text" id="contact_form_title" name="contact_tilte" style="width:100%"
                                class="contact_form_tilte input_field" placeholder="Nhập tiêu đề" required="required"
                                data-error="Hãy nhập tiêu đề.">
                        </div>
                        <div class="contact_form_text">
                            <textarea id="contact_form_message" class="text_field contact_form_message"
                                name="contact_message" rows="3" placeholder="Nội dung lời nhắn" required="required"
                                data-error="Please, write us a message."></textarea>
                        </div>
                        <div class="contact_form_button">
                            <button type="submit" class="button contact_submit_button">Gửi lời nhắn</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="panel1"></div>
</div>

<!-- Map -->

<div class="contact_map" style="margin-bottom:100px">
    <!-- <div id="google_map" class="google_map">
			<div class="map_container">
				<div id="map"></div>
			</div>
        </div> -->
    <div class="google_map">
        <div class="map_container">
            <div><iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d88019.42471814633!2d108.15884628898672!3d16.056331920081586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1607014683104!5m2!1svi!2s"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe></div>
        </div>
    </div>
</div>

@endsection
