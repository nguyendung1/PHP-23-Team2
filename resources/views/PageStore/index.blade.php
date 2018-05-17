<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mobilestore Website Template | Home :: W3layouts</title>
		<base href="{{asset('')}}">
		<link href="{{asset('web/styles/style2.css')}}" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" type="text/css" href="web/images/slide/icon/mobilestore.jpg">
		<link rel="stylesheet" href="{{asset('web/styles/responsiveslides.css')}}">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="{{asset('web/js/responsiveslides.min.js')}}"></script>
			<!-- boostrap-->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
           <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
		  <style type="text/css">
		  	  .images_1_of_4
		  	  {
		  	  	width:23%;
		  	  }
		  	  @media screen and (max-width:480px)
		  	  {
		  	  	.images_1_of_4 {
		         width: 59.85%;
                 margin-left: 30%;
	              }
	              .sp{
	              	display: none;
	              } 
	              .sp1{
	              	display: block;
	              }
		  	  }
		  	  .header-top-nav  ul
		  	  {
                   list-style-type: none;
                   position: relative;
		  	  }
		  	  .header-top-nav ul li{

		  	  }
		  	  .header-top-nav ul li a{
                   display: block;
                   width: 90px;
		  	  } 
		  	   .header-top-nav ul ul{
                   display: none;
                   position: absolute;
                   top: 99%;
                   background-color:white;

		  	  } 
		  	   .header-top-nav ul li li{
		  	   	float: none;
		  	   }
		  	    .header-top-nav ul li:hover >ul{
		  	   display: block;
		  	   }
		  	    .header-top-nav >ul::after{
		  	   	display: block;
		  	   	content: "";
		  	   	clear: both;
		  	   }


		  	  
		  	  


		  </style>
	</head>
	<body>
		<div class="wrap">
		<!----start-Header---->
		<div class="header">
			<div class="search-bar">
				<form action="{{url('search')}}" method="get">
					<input type="text" name="search" placeholder="Nhập tên Sản phẩm Cần tìm..">
					
					<input type="submit" value="Search" />
				</form>
			</div>
			<div class="clear"> </div>
			<div class="header-top-nav" >
				<ul>
					<li><a href="#">Phát Triển</a></li>
					<li><a href="#">Thanh Toán</a></li>

					 
					 	 <li><a href="{{url('shoppingCart')}}"><i style="font-size: 2em;" class="fa fa-shopping-cart"></i>    <span style="color:white;background-color:orange;border-radius:40%; font-size:1.5em;padding:1px 3px;">@if (Cart::content()){{count(Cart::content())}}@else (Trống) @endif </span></a></li>
					 	 
					 	</span></a></li>
				
					
			          @if(Auth::check())	
						<li><a href="{{url('/')}}">Chào!<img src="{{asset('web/images/slide/admin1.png')}}"> {{Auth::user()->name}}</a>
                             <ul>
					  			<li><a href="{{url('update/{$id}')}}">Thông Tin</a></li>
					  		@if(Auth::user()->is_admin==0)
					  			    <li><a href="{{url('admin/home')}}">Quản Trị</a></li>
					  		@endif
				  			  	<li><a href="{{url('shopping')}}">Đơn Hàng</a></li>
					  			<li><a href="{{url('admin/changePass')}}">Đổi Password</a></li>
					  			<li><a href="{{url('dangxuat')}}">Đăng Xuất</a></li>
							
						</li>
		  			
			  		@else
					<li><a href="{{url('dangky')}}">Đăng Kí</a></li>
					<li><a href="{{url('dangnhap')}}">Đăng Nhập</a></li>
					
					@endif
		
				</ul>
			</div>
			<div class="clear"> </div>

		</div>
		</div>
		<div class="clear"> </div>
		<div class="top-header">
			<div class="wrap">
		<!----start-logo---->
			<div class="logo">
				<a href="{{url('/')}}"><img src="web/images/slide/logo.png" title="logo" /></a>
			</div>
		<!----end-logo---->
		<!----start-top-nav---->
		<div class="top-nav">
			<ul>
				<li><a href="{{url('/')}}">Trang Chủ</a></li>
				<li><a href="{{url('about')}}">Giới Thiệu</a></li>
				<li><a href="#">Đặc Trưng</a></li>
				<li><a href="{{url('blog')}}">Blog</a></li>
				<li><a href="{{url('contact')}}">Liên Hệ</a></li>
			</ul>
		</div>
		<div class="clear"> </div>





		</div>
		</div>
		<!----End-top-nav---->
		<!----End-Header---->
	<!--start-image-slider---->
					<div class="wrap">
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="web/images/slide/1.png" alt=""></li>
					      <li><img src="web/images/slide/2.png" alt=""></li>
					      <li><img src="web/images/slide/1.png" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
					</div>
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    	<div class="top-3-grids">
		    		<div class="section group">
				<div class="grid_1_of_3 images_1_of_3">
					  <a href="{{url('/')}}"><img src="web/images/slide/grid-img1.jpg"></a>
					  <h3>Hãng BlackBerry  Ra Mắt Ngày 05-06-2018</h3>
				</div>
				<div class="grid_1_of_3 images_1_of_3 second">
					   <a href="{{url('about')}}"><img src="web/images/slide/grid-img2.jpg"></a>
					  <h3>Điện Thoại Sắp Ra Mắt 28-06-2018</h3>
				</div>
				<div class="grid_1_of_3 images_1_of_3 theree">
					   <a href="{{url('about')}}"><img src="web/images/slide/grid-img3.jpg"></a>
					  <h3>Điện Thoại Sắp Ra Mắt 03-06-2018</h3>
				</div>
			</div>
		    	</div>
		    	
		    <div class="content-grids">
		    	<div class="sp">
		    	<h4>Mặt Hàng Mua Nhiều Nhất Trong Tuần</h4></div>
		    	<div class="sp1" class="w3-text-brown"><h4>Hiện Có {{count($products)}} Sản Phẩm</h4></div>
		    	<div class="section group">
             
	
	  
                 @if(isset($products))

		       	  @foreach($products as $product)
		        	
				   <div class="grid_1_of_4 images_1_of_4 products-info" style="margin-left:5%;">
					<a href="{{url('viewDetail/'.$product->id)}}"> <img src="web/images/slide/{{$product->image}}" alt="{{$product->name}}"></a>
					 <h3><a href="{{url('viewDetail/'.$product->id)}}">{{$product->name}}</a></h3>

					 <h3>{{number_format($product->price)}} VND</h3>
					 
					 <ul>
					 	<li><a  class="cart" href="{{url('viewDetail/'.$product->id)}}" > </a></li>
					 	<li><a  class="i" href="single.html"> </a></li>
					 	<li><a  class="Compar" href="single.html"> </a></li>
					 	<li><a  class="Wishlist" href="single.html"> </a></li>
					 </ul>
				</div>
			
				@endforeach
			@endif

			</div>
                 <div class="row">{{$products->links()}}</div>
		    
		    	</div>
		    	
		    	<div class="content-sidebar">
		    		<h4>Hãng Sản Xuất</h4>
		    		 
						<ul>
							@if(isset($categories))
							@foreach($categories as $category)

							<li><a href="{{url('store/'.$category->id)}}">{{$category->name}}</a></li>

							@endforeach
							@endif
							
						</ul>
		    	</div>
		    </div>
		    <div class="clear"> </div>
		    </div>
		<div class="footer">
			<div class="wrap">
			<div class="section group">
			<div class="col_1_of_4 span_1_of_4" >
					<h3>Thông Tin Của Chúng Tôi</h3>
					<p style="color: white;">Là một thành viên tự hào của gia đình MobileLowLab, bạn không phải đi ra khỏi con đường của bạn tìm thấy chúng tôi - chỉ cần tìm chúng tôi nơi các sản phẩm Mobile được bán. Chúng tôi có 100 địa điểm ở Việt Nam,Công Ty san xuất và phân phối đặt trụ sớ tại Singapore.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4" >
					<h3>Hướng Dẫn Mua Hàng</h3>
					<p style="color: white;">Hướng dẫn mua hàng online.</p>
					<p style="color: white;">Hướng dẫn mua hàng trả góp.</p>
					<p style="color: white;">Chính sách đổi trả / bảo hành.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Vị Trí Cửa Hàng</h3>
					<p style="color: white;"><a href="{{url('blog')}}">Nhấn Vào đây để Hiển Thị Của Hàng Gần Bạn Nhất</a></p>
					<h3>Order-online</h3>
					<p style="color: white;">080-1234-56789</p>
					<p style="color: white;">080-1234-56780</p>
				</div>
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>News-Letter</h3>
					<input type="text"><input type="submit" value="go" />
					<h3>Fallow Us:</h3>
					 <ul>
					 	<li><a href="#"><img src="web/images/slide/twitter.png" title="twitter" />Twitter</a></li>
					 	<li><a href="#"><img src="web/images/slide/facebook.png" title="Facebook" />Facebook</a></li>
					 	<li><a href="#"><img src="web/images/slide/rss.png" title="Rss" />Rss</a></li>
					 </ul>
				</div>
			</div>
		</div>
		
		<div class="clear"> </div>
		<div class="wrap">
		<div class="copy-right">
			<p>Mobilestore  &#169	 All Rights Reserved | Design By <a href="http://w3layouts.com/">W3Layouts</a></p>
		</div>
		</div>
		</div>
	</body>
</html>

