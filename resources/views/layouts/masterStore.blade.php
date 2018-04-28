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
		<title>Mobilestore Website Template | About :: W3layouts</title>
		<link href="{{asset('web/styles/style.css')}}" rel="stylesheet" type="text/css"  media="all" />
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
			<div class="header-top-nav">
			  <ul>	
			  		
					<li><a href="#">Phát Triển</a></li>
					<li><a href="#">Thanh Toán</a></li>
					<li><a href="#">Tài Khoản Của Tôi</a></li>
					<li><a href="#"><span>shopingcart &nbsp;: </span></a><lable> &nbsp;(Trống)</lable></li>
					@if(Auth::check())	
						<li><a href="{{url('')}}">Chào bạn ! {{Auth::user()->name}}</a></li>
			  			<li><a href="{{url('logout')}}">Đăng Xuat</a></li>
			  			
			  		@else
					<li><a href="{{url('register')}}">Đăng Kí</a></li>
					<li><a href="{{url('login')}}">Đăng Nhập</a></li>
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
				 <li><a href="{{url('index')}}">Trang Chủ</a></li>
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
				<div class="col_1_of_4 span_1_of_4">
					<h3>Our Info</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Latest-News</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Store Location</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<h3>Order-online</h3>
					<p>080-1234-56789</p>
					<p>080-1234-56780</p>
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

