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
                            ?>
						<div class="cart_title">Giỏ hàng</div>
						<div class="cart_items">
							<table class="table table-light cart_list text-center">
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
										<td style="padding:20px;"><img src="{{asset('public/uploads/product/' . $value_content->options->image)}}" alt="" width="80px"></td>
										<td class="cart_item_text text-left">{{$value_content->name}}</td>
										<td class="cart_item_text">
											<form action="{{URL::to('update-cart-quantity')}}" method="post">
												{{ csrf_field() }}
											<input type="number" name="quantity_cart" value="{{$value_content->qty}}" style="width: 16%;padding: 4px;">
											<input type="hidden" name="rowid_cart" value="{{$value_content->rowId}}"></input>
											<input type="submit" name="update_qty" value="Cập nhật" class="btn btn-primary"></input>
											</form>
										</td>
										<td class="cart_item_text">{{number_format($value_content->price, 0, ',', '.').' '.'VNĐ'}}</td>
										<td class="cart_item_text">
											<?php
                                                $subtotal = $value_content->price * $value_content->qty;
                                                echo number_format($subtotal, 0, ',', '.').' '.'VNĐ';
											?>
										</td>
										<td>
											<a href="{{URL::to('/delete-to-cart/'.$value_content->rowId)}}"><button type="button" class="btn btn-primary">Xóa</button></a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Tổng:</div>
								<div class="order_total_amount">{{Cart::total().' '.'VNĐ'}}</div>
                            </div>
                            <div class="order_total_content text-md-right">
								<div class="order_total_title">Thuế:</div>
								<div class="order_total_amount">{{Cart::tax().' '.'VNĐ'}}</div>
							</div>
						</div>

						<div class="cart_buttons">
							<!-- <button type="button" class="button cart_button_clear">Clear</button> -->
							<button type="button" class="button cart_button_checkout">Thanh toán</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection