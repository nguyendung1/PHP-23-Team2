<!DOCTYPE HTML>
<html>
        <head>
        <meta charset="utf-8">
        <title>Mobilestore Website Template | About :: W3layouts</title>
        <link href="{{asset('web/styles/style.css')}}" rel="stylesheet" type="text/css"  media="all" />
        <link href="{{asset('web/styles/style4.css')}}" rel="stylesheet" type="text/css"  media="all" />
        <meta name="keywords" content="Mobilestore iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{asset('web/styles/style1.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('web/styles/jqzoom.css')}}" type="text/css">
        <script type="text/javascript" src="web/js/jquery-1.3.2.js"></script>
        <script type="text/javascript" src="web/js/jquery.livequery.js"></script>
        <link rel="shortcut icon" type="text/css" href="{{asset('web/images/slide/icon/mobilestore.jpg')}}">
        <!-- boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script type="text/javascript">

			$(function() {
				$(".jqzoom").jqzoom();
			});
		</script>
		<script>
		$(document).ready(function(){
			$(".menu_body").hide();
			//toggle the componenet with class menu_body
			$(".menu_head").click(function(){
				$(this).next(".menu_body").slideToggle(600); 
				var plusmin;
				plusmin = $(this).children(".plusminus").text();
				
				if( plusmin == '+')
				$(this).children(".plusminus").text('-');
				else
				$(this).children(".plusminus").text('+');
			});
		});
		</script>

		<style type="text/css">
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
					<input type="text" name="search" placeholder="Nhập tên Sản Phẩm..">
					
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
					<li><a href="{{url('/')}}">Chào!<img src="{{asset('web/images/slide/admin1.png')}}">{{Auth::user()->name}}</a>
						 <ul>
			  			    <li><a href="{{url('update/{$id}')}}">Thông Tin</a></li>
			  			    @if(Auth::user()->is_admin==0)
					  			<li><a href="{{url('admin/home')}}">Quản Trị</a></li>
					  		@endif
				  			  	<li><a href="{{url('shopping')}}">Đơn Hàng</a></li>
					  			<li><a href="{{url('admin/changePass')}}">Đổi Password</a></li>
					  			<li><a href="{{url('dangxuat')}}">Đăng Xuất</a></li>
			  			 </ul>  
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
				<a href="{{url('/')}}"><img src="{{asset('web/images/slide/logo.png')}}" title="logo" /></a>
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
		   <main>

		   	@yield('content')
		   	   
		    	
		   </main>
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
					 	<li><a href="#"><img src="{{asset('web/images/slide/twitter.png')}}" title="twitter" />Twitter</a></li>
					 	<li><a href="#"><img src="{{asset('web/images/slide/facebook.png')}}" title="Facebook" />Facebook</a></li>
					 	<li><a href="#"><img src="{{asset('web/images/slide/rss.png')}}" title="Rss" />Rss</a></li>
					 </ul>
				</div>
			</div>
		</div>
		</div>
	</body>
</html>


