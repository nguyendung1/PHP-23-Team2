@extends('layouts.masterStore')
@section('content')
	<div class="container">
		<h1><span class="fa fa-shopping-cart" style="font-size: 30px" ></span>   Sản Phẩm Của Bạn</h1>
		
		<div id="content">
		
			<div class="table-responsive">
				<!-- Shop Products Table -->
				<table class="shop_table " cellspacing="0">
					<thead>
						<tr>
							<th class="product-name">Mã Hàng</th>
							<th class="product-name">Tên Khách Hàng</th>
							<th class="product-subtotal">Tổng tiền</th>
							<th class="product-remove">Trạng thái</th>
							<th>Chi Tiết</th>
						</tr>
					</thead>
					<tbody>
						
						@foreach($orders as $order)
						<?php 
							if($order->status == 1){
								$status = '	<a class="btn btn-success" >Đã Xử Lý</a>';
							}elseif($order->status ==2){
								$link = url('status/'.$order->id.'/'.$order->status);
								$status = '	<a  class="btn btn-primary" href="'.$link.'">Đang Xử Lý</a>';
							}else{
								$link = url('status/'.$order->id.'/'.$order->status);
								$status =  '<a class="btn btn-danger" href="'.$link.'">Hủy</a>';
							}

						?>
					
						<tr class="cart_item">
						

		       	  		
							<td class="product-name">
								<div class="media">
									<p class="font-large table-title">{{$order->id}}</p>
									
								</div>
							</td>
							<td class="product-name">
								<div class="media-body">
										<p class="font-large table-title">{{$order->name}}</p>
										
								</div>
							</td>	
							<td class="product-subtotal">
								<span class="amount">{{number_format($order->total)}}</span>
							</td>

							<td class="product-remove">
								{!! $status !!}
							</td>
							<td class="product-remove">
								<a href="{{url('chitiet/'.$order->id)}}" style="font-size:1em">view</a>
							</td>
						
						</tr>
						@endforeach
	
					</tbody>

					
				</table>
				<!-- End of Shop Table Products -->
			</div>
			<div class="clearfix"></div>

		</div> <!-- #content -->
	</div> <!-- .container -->
@stop