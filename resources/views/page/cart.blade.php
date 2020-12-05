@extends('layouts.master')
@section('maincontent')
<!-- Cart -->

<div class="cart_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="cart_container">
                    <?php
								$content = Cart::content();
								// echo '<pre>';
								// print_r($content);
								// printf(count($content));
								// echo '<pre>';
                            ?>
                    <div class="cart_title">Giỏ hàng</div>

                    <?php	
						// if(count($content)==0){
						// echo '<br><div class="h6"><i class="fas fa-exclamation-circle" style="color:red;"></i> Bạn chưa có sản phẩm nào trong giỏ hàng. Hãy thêm một sản phẩm vào giỏ</div>';
						// }
					?>

                    @if(count($content)==0)
                    <br>
                    <div class="h6"><i class="fas fa-exclamation-circle" style="color:red;"></i> Bạn chưa có sản phẩm
                        nào trong giỏ hàng. Hãy thêm một sản phẩm vào giỏ</div>
                    @else
                    <div class="cart_items">
                        <table class="table cart_list text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th>Hình ảnh</th>
                                    <th class="text-left">Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>Tổng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($content as $value_content)

                                <tr>
                                    <td style="padding:20px;"><img
                                            src="{{asset('public/uploads/product/' . $value_content->options->image)}}"
                                            alt="" width="80px"></td>
                                    <td class="cart_item_text text-left">{{$value_content->name}}</td>
                                    <td class="cart_item_text">
                                        <form action="{{URL::to('update-cart-quantity')}}" method="post">
                                            {{ csrf_field() }}
                                            <input type="number" name="quantity_cart" value="{{$value_content->qty}}"
                                                style="width: 16%;padding: 4px;">
                                            <input type="hidden" name="rowid_cart"
                                                value="{{$value_content->rowId}}"></input>
                                            <input type="submit" name="update_qty" value="Cập nhật"
                                                class="btn btn-primary"></input>
                                        </form>
                                    </td>
                                    <td class="cart_item_text">{{number_format($value_content->price, 0, ',', '.').'₫'}}
                                    </td>
                                    <td class="cart_item_text">
                                        <?php
                                                $subtotal = $value_content->price * $value_content->qty;
                                                echo number_format($subtotal, 0, ',', '.').'₫';
											?>
                                    </td>
                                    <td>
                                        <a href="{{URL::to('/delete-to-cart/'.$value_content->rowId)}}"><button
                                                type="button" class="btn btn-primary">Xóa</button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Order Total -->
                    <div class="order_total">
                        <div class="order_total_content">
                            <div class="order_total_title">Tổng tiền:</div>
                            <div class="order_total_amount">{{Cart::total().'₫'}}</div>
                        </div>
                        <div class="order_total_content">
                            <div class="order_total_title">Thuế:</div>
                            <div class="order_total_amount" style="margin-left:17%">{{Cart::tax().'₫'}}</div>
                        </div>
                    </div>

                    <div class="cart_buttons">
                        <!-- <button type="button" class="button cart_button_clear">Clear</button> -->
                        @if(Auth::check())
                        <button type="button" class="button cart_button_checkout"><a style="padding:0;"
                                href="{{URL::to('checkout')}}">Thanh toán</a></button>
                        @else
                        <button type="button" onClick="return alert('Bạn phải đăng nhập để thanh toán')"
                            class="button cart_button_checkout"><a style="padding:0;" href="{{URL::to('login')}}">Thanh
                                toán</a></button>
                        @endif
                    </div>
                    @endif



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
