<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
     @extends('layouts.masterStore')
     @section('content')
	<!----End-top-nav---->
		<!----End-Header---->
               <div class="wrap">
		<!----start-Header---->
		<div class="header">
			<div class="search-bar">
				<form>
					<input type="text" name="search" placeholder="Bạn tìm gì..."><input type="submit" value="Search" />
				</form>
			</div>
			<div class="clear"> </div>
			<div class="header-top-nav">
				<ul>
					<li><a href="#">Đăng Kí</a></li>
					<li><a href="#">Đăng Nhập</a></li>
					<li><a href="#">Phát Triển</a></li>
					<li><a href="#">Thanh Toán</a></li>
					<li><a href="#">Tài Khoản Của Tôi</a></li>
					<li><a href="#"><span>shopingcart &nbsp;: </span></a><lable> &nbsp;(Trống)</lable></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>
		<div class="clear"> </div>
		<div class="top-header">
			<!----End-top-nav---->
		<!----End-Header---->
	<!--start-image-slider---->
				

		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    
		    <div class="content-grids">
		    	<h4>Mặt Hàng Mua Nhiều Nhất Trong Tuần(Hiện Có {{count($products)}} Sản Phẩm.)</h4>
		    	<div class="section group">

                  @if(isset($products))
		         @foreach($products as $product)		
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="web/images/slide/{{$product->image}}" alt="{{$product->name}}">
					 <h3><a href="single.html">{{$product->name}}</a></h3>
					 <h3>{{number_format($product->price)}} VND</h3>
					 
					 <ul>
					 	<li><a  class="cart" href="single.html"> </a></li>
					 	<li><a  class="i" href="single.html"> </a></li>
					 	<li><a  class="Compar" href="single.html"> </a></li>
					 	<li><a  class="Wishlist" href="single.html"> </a></li>
					 </ul>
				</div>
			@endforeach
			@endif	
			
			</div>
		    
		    	</div>
 
		    	<div class="content-sidebar">
		    		<h4>Hãng Sản Xuất</h4>
		    		

						<ul>
                                 @if(isset($categories))
							@foreach($categories as $category)

							<li><a href="{{url('store/'.$category->id)}}">{{$category->name}}</a></li>
                               
							@endforeach
							@endif
							

							<li><h3>Mức Giá</h3></li>
							<li><a href="#">Tất Cả</a></li>
							<li><a href="#">Dưới 1 triệu</a></li>
							<li><a href="#">Từ 1-3 triệu</a></li>
							<li><a href="#">Từ 3-6 triệu</a></li>
							<li><a href="#">Từ 6-10 triệu</a></li>
							<li><a href="#">Từ 10-15 triệu</a></li>
							<li><a href="#">Trến 15 triệu</a></li>
						</ul>
				  		
		    	</div>
		    </div>
		    <div class="clear"> </div>
		    </div>
     </main>
	@stop

