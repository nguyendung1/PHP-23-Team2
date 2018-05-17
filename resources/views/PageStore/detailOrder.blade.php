@extends('layouts.masterStore')
@section('content')
	<div class="container">
		
		<h1><span class="fa fa-shopping-cart" style="font-size: 30px" ></span>  Chi Tiết Sản Phẩm Của Bạn</h1>
		<br>
		<div id="content">
			
			<div class="table-responsive">
				<!-- Shop Products Table -->
				<table class="shop_table " cellspacing="0">
					<thead>
						<tr>
							<th class="product-name">Thứ Tự</th>
							<th class="product-name">Tên Sản Phẩm</th>
							<th>Hình</th>
							<th class="product-quantity">Số Lượng</th>
							<th class="product-subtotal">Giá tiền</th>
						
						</tr>
					</thead>
					<tbody>
						<?php
						 $i = 1; ?>

						@foreach($orderDetail as $detail)
	
						 <tr>
						 	<td>{{$i}}</td>
						 	<td>{{$detail->product->name}}</td>
				 			<td><img height="100px" src="{{asset('web/images/total')}}/{{$detail->product->image}}"></td>
						 	<td>{{$detail->quantity}}</td>
						 	<td>{{number_format($detail->price)}}</td>
						 </tr>	
						 <?php 

						 $i++;
						 ?>
						@endforeach
	
					</tbody>

					
				</table>
				<!-- End of Shop Table Products -->
			</div>


			<!-- Cart Collaterals -->
			<div class="cart-collaterals">

				<div class="cart-totals pull-right">
					<div class="cart-totals-row"><span style="color:red">Tổng Tiền:</span> <span style="color:red">{{number_format($order->total)}}</span></div>
				</div>

				<div class="clearfix"></div>
			</div>
			<!-- End of Cart Collaterals -->
			<div class="clearfix"></div>

		</div> <!-- #content -->
	</div> <!-- .container -->
@stop