<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

		<!----End-top-nav---->
		<!----End-Header---->
		@extends('layouts.masterStore')
        @section('content')
		<main  style="background-color:  white;">
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    <div class="content-grids" style="width: 100%;">
		    	<div class="details-page">
		    		<div class="back-links">
		    			<ul>
		    				<li><a href="{{url('/')}}">Home</a><img src="web/images/slide/arrow.png" alt=""></li>
		    				
		    				
		    				<li><a href="{{url('viewDetail/1')}}">Details</a><img src="web/images/slide/arrow.png" alt=""></li>
		    				<li><a href="#">Cart</a><img src="web/images/slide/arrow.png" alt=""></li>
		    			</ul>
		    		</div>
		    	</div>
		    	     <div class="detalis-image-details" style="width: 100%; ">
		    	     	 @if(count(Cart::content())>0)	
		    	           
                            
		    	           <table class=" text-center w3-table-all" style="width:60%;float: left; margin-right: 2em;">
		    	           	   <tr>
		    	           	   	   <th>Hình Ảnh Sản Phẩm</th>
		    	           	   	   <th>Tên Sản Phẩm</th>
		    	           	   	   <th>Giá Tiền</th>
		    	           	   	   <th>Số Lượng</th>
		    	           	   	   <th>Xóa</th>
		    	           	   </tr>
		    	               @foreach(Cart::content() as $item)
		    	           	 <tr>
		    	           	   	  <td><img class="w3-card" src="{{asset('web/images/total')}}/{{$item->name}}.jpg" height="200" width="200" style="height:auto;" alt="{{$item->image}}"></td>

		    	           	   	   <td style="padding-top: 4em;">{{$item->name}}</td>
		    	           	   	   <td style="padding-top: 4em;">{{number_format($item->price)}}<sup><u>đ</u></sup></td>
		    	           	   	  <td style="padding-top: 4em;">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href="{{url('updateIncrement/'.$item->rowId)}}"> + </a>
                                <input class="cart_quantity_input" type="text" name="qty" value="{{$item->qty}}" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href="{{url('updateDecrese/	'.$item->rowId)}}"> - </a>
                            </div>
                               </td>
		    	                    
		    	           	   	    <td style="padding-top: 4em;"><a href="{{url('deleteCart/'. $item->rowId)}}"><i style="font-size:1.5em" class="fa fa-trash"></i></a></td>
		    	           	   </tr>
		    	           	
		    	           	  @endforeach

		    	           	  	 
		    	           <!--</table>

		    	         	<table class="w3-table-all" style="width: 60%;">
		    	         	-->
		    	         		<tr>
		    	         			<td>Tạm Tính : </td>
		    	         			<td>{{Cart::subtotal()}} <sup><u>đ</u></sup></td>
		    	         		</tr>
		    	         		<tr>
		    	         			<td>Phí Vận Chuyển : </td>
		    	         			<td>0<sup><u>đ</u></sup></td>
		    	         		</tr>
		    	         		<tr>
		    	         			<td>Thành Tiền : </td>
		    	         			<td class="w3-text-red">{{Cart::subtotal()}} <sup><u>đ</u></sup></td>
		    	         		</tr>
		    	         		<tr>
		    	         			<td><a class="btn btn-danger"  href="#">Tiến Hành Đặt Hàng</a></td>
		    	         	        <td><a class="btn btn-info" href="{{url('store/1')}}">Tiếp Tục Mua Hàng</a></td><br>
		    	         		</tr>

                              </table> 
		    	           	
		    	         	 <h3 style="margin-left: 2em;">Đơn Mua Hàng</h3>
		    	         	  <p>Hãy nhập đầy đủ thông tin theo yêu cầu</p>
		    	         	  <form action="{{url('order')}}" method="post" style=" margin-left: 30%;">
				                 <input type="hidden" name="_token" value="{{csrf_token()}}">
				                    <div class="row">
					
					                     <div class="col-sm-8">
						
					                  	<div class="space20">&nbsp;</div>
					                		
					

					                 	<div class="form-block">
						               	<label for="your_last_name">Tên đầy đủ <span class="w3-text-red">*</span> </label>
							           <input type="text" class="form-control" id="your_last_name" name="name"  placeholder="">
							            @if($errors->has('name'))
								     <p class="text-danger">{{$errors->first('name')}}</p>
							        @endif
						             </div>
						

						           <div class="form-block">
					 		          <label for="adress">Địa chỉ <span class="w3-text-red">*</span> </label>
							          <input type="text" class="form-control" id="adress" value="" name="address" >
							         @if($errors->has('address'))
								     <p class="text-danger">{{$errors->first('address')}}</p>
							        @endif
					             	</div>


											<div class="form-block">
												<label for="phone">Số Điện thoại  <span class="w3-text-red">*</span> </label>
												<input type="text" class="form-control" id="phone" name="phone_number" >
												@if($errors->has('phone_number'))
													<p  class="text-danger">{{$errors->first('phone_number')}}</p>
												@endif
											</div>


											<div class="form-block">
												<label for="phone">Ghi Chú <span class="w3-text-red">*</span> </label>
												
					                            <textarea col=30 row=4 name="note"></textarea>
												@if($errors->has('note'))
													<p  class="text-danger">{{$errors->first('phone_number')}}</p>
												@endif
											</div>
											   <div class="form-block">
					 		          <label for="adress">Ngày Đặt Hàng<span class="w3-text-red">*</span> </label>
							          <input type="date" class="form-control" id="" value="dateOrder" name="date_order" required >
							        
											<div class="form-block">
												<input type="submit" name="" value="Đặt Hàng" class="btn btn-info">
												   @if (Session::has('status'))
											              <div class="alert alert-success">
											                  <h3 class="w3-text-red">{{ Session::get('status') }}</h3>
											                </div>
											        @endif
												
											</div>
								
							    	      </form> 
							    	   
										</div>
									</div>

										 @else
										    	<div class="form-group text-center">
										          	@if (Session::has('success'))
												        <div class="alert alert-success">
												          {{ Session::get('success') }}
												        </div>
													@endif
													</div>
					                <p>Bạn Không có Sản phẩm Nào trong giỏ hàng</p>
					                @endif
								</div>
			
		    	             </div>
		    	
		                 </div>
		             <div class="clear"> </div>
		          </div>


               
		</main>
	
   @stop		

