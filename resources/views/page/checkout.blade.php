@extends('layouts.master')
@section('maincontent')
<!-- Cart -->

<div class="cart_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart_container">
                    <?php
						$content = Cart::content();
                    ?>
                    <div class="cart_title">Thanh toán</div>

                    <div class="cart_items" style="background-color: aliceblue;padding: 15px;">
                        <div class="row">
                            <div class="col-md-6 order-md-2 mb-4">
                                <h4 class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted">Giỏ hàng</span>
                                    <span class="badge badge-primary badge-pill">{{count($content)}} sản phẩm</span>
                                </h4>

                                <hr class="mb-3">

                                <div class="mb3">
                                    <table class="table cart_list text-center">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Hình ảnh</th>
                                                <th class="text-left">Tên sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Giá</th>
                                                <th>Tổng</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($content as $value_content)

                                            <tr>
                                                <td style="padding:20px;"><img
                                                        src="{{asset('public/uploads/product/' . $value_content->options->image)}}"
                                                        alt="" width="60px"></td>
                                                <td class="cart_item_text2 text-left">{{$value_content->name}}</td>
                                                <td class="cart_item_text2">
                                                    <input type="text" name="quantity_cart"
                                                        value="{{$value_content->qty}}"
                                                        style="width: 30%;padding: 4px;text-align: center;" readonly>
                                                    <input type="hidden" name="rowid_cart"
                                                        value="{{$value_content->rowId}}"></input>
                                                </td>
                                                <td class="cart_item_text2">
                                                    {{number_format($value_content->price, 0, ',', '.').'₫'}}</td>
                                                <td class="cart_item_text2">
                                                    <?php
                                                    $subtotal = $value_content->price * $value_content->qty;
                                                    echo number_format($subtotal, 0, ',', '.').'₫';
                                                ?>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Tổng tiền:</span>
                                        <strong>{{Cart::total().' '.'₫'}}</strong>
                                    </li>

                                    <!-- <li class="list-group-item d-flex justify-content-between">
                                <span>Thuế</span>
                                <strong>{{Cart::tax().' '.'VNĐ'}}</strong>
                                </li> -->
                                </ul>

                            </div>
                            <div class="col-md-6 order-md-1">
                                <h4 class="mb-3 text-muted">Thông tin thanh toán</h4>
                                <hr class="mb-3">
                                <form class="needs-validation" novalidate action="{{ URL::to('order-place')}}"
                                    method="POST">
                                    {{ csrf_field() }}

                                    <div class="mb-3">
                                        <label for="firstName">Tên khách hàng</label>
                                        <input type="text" name="shipping_name" class="form-control" id="firstName" placeholder=""
                                            value="{{Auth::user()->name}}" required>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập người nhận hàng
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" name="shipping_mail" class="form-control" id="email"
                                            placeholder="you@example.com" value="{{Auth::user()->email}}">
                                        <div class="invalid-feedback">
                                            Vui lòng nhập email
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address">Địa chỉ</label>
                                        <input type="text" name="shipping_address" class="form-control" id="address"
                                            placeholder="1 Nguyễn Văn Linh" value="{{Auth::user()->address}}" required>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập địa chỉ nhận hàng
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address">Số điện thoại</label>
                                        <input type="text" name="shipping_phone" class="form-control" id="address" placeholder="090 999 9999"
                                            value="{{Auth::user()->phone}}" required>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập số điện thoại nhận hàng
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address">Ghi chú đơn hàng (không bắt buộc)</label>
                                        <textarea rows="3" class="form-control" name="shipping_note" id="address"
                                            placeholder="Nội dung ghi chú"></textarea>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập ghi chú
                                        </div>
                                    </div>

                                    <hr class="mb-4">

                                    <h4 class="mb-3 text-muted">Hình thức thanh toán</h4>

                                    <div class="d-block my-3">
                                        <div class="custom-control custom-radio">
                                            <input id="credit" name="payment_id" type="radio"
                                                class="custom-control-input" checked value="1" required>
                                            <label class="custom-control-label" for="credit">Thanh toán khi nhận hàng
                                                (Tiền mặt)</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input id="debit" name="payment_id" type="radio" value="2"
                                                class="custom-control-input" required>
                                            <label class="custom-control-label" for="debit">ATM</label>
                                        </div>
                                    </div>

                                    <hr class="mb-4">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Đặt Hàng</button>
                                </form>
                            </div>
                        </div>
                        <!-- <hr class="mb-4">
                        <div class="cart_buttons" style="margin-top:0;margin-bottom: 10px;"> -->
                        <!-- <button type="button" class="button cart_button_clear">Clear</button> -->
                        <!-- <button href="" type="button" class="button cart_button_checkout">Đặt hàng</button>
                        </div> -->

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
