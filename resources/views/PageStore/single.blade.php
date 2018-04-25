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
		<title>Mobilestore Website Template | single :: W3layouts</title>
		<link href="{{asset('web/styles/style.css')}}" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" type="text/css" href="{{asset('web/images/slide/icon/mobilestore.jpg')}}">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="{{asset('web/js/jquery-1.3.2.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('web/js/jqzoom.pack.1.0.1.js')}}" type="text/javascript"></script>
		<link rel="stylesheet" href="{{asset('web/styles/jqzoom.css')}}" type="text/css">
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
				<form>
					<input type="text"><input type="submit" value="Search" />
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
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    <div class="content-grids" style="width: 100%;">
		    	<div class="details-page">
		    		<div class="back-links">
		    			<ul>
		    				<li><a href="#">Home</a><img src="{{asset('web/images/slide/arrow.png')}}" alt="caret image"></li>
		    				<li><a href="#">Product</a><img src="{{asset('web/images/slide/arrow.png')}}" alt="caret  image"></li>
		    				<li><a href="#">ProductDetail</a><img src="{{asset('web/images/slide/arrow.png')}}" alt="caret  image"></li>
		    			</ul>
		    		</div>
		    	</div>
                       <div class="detalis-image" style="float: left;">
		    		<div id="content"><a href="{{asset('web/images/total')}}/{{$product->image}}" class="jqzoom"  title="Product-Name"> <img class="w3-card-2" src="{{asset('web/images/total')}}/{{$product->image}}" 
		    			width="350" height="320"  title="Product-Name" style="border: 1px solid #e5e5e5;"> </a>
					</div>
				</div>
		    	

		    	
		    	
		    	     <div class="detalis-image-details" style="width:80%;">
		    	 
		    	
		    		    <div class="details-categories">
                         
                           
		    			<ul>
                               <li> <h3>{{$product->name}}</h3> </li><br>
		    				    <li><h3>Thuộc Hãng:<a  class="active1" href="#"><span>{{$category->name}}</span></a></h3></li><br>
		    				
		    				    <li><h3>Thông Số Kỹ Thuật</h3></li><br>
		    				    <li>Màn Hình :{{$technology->screen}}</li><br>
		    				    <li>Hệ Điều Hành : <a class="w3-text-blue" href="#" >{{$technology->system}}</a></li><br>
		    				    <li>Camera: {{$technology->camera}}</li><br>
		    				    
		    				    <li>CPU:{{$technology->cpu}}<a class="w3-text-blue" href="#">Apple A11 Bionic 6 nhân</a></li><br>
		    				    <li>RAM :  {{$technology->ram}}  GB</li><br>
		    				    <li>Bộ nhớ trong:{{$technology->rom}}</li><br>
		    				    <li>Thẻ Nhớ:	{{$technology->memory}}</li><br>
		    				    <li>Dung lượng pin:	{{$technology->pin}} mAh, có sạc nhanh</li>

		    				
		    			</ul>
		    		</div><br />
		    		<div class="brand-value"  style="margin-top:-0.0001px;">
		    			<h3>Khuyến Mãi Đặc Biệt</h3>
		    			<div class="left-value-details">
			    			<ul style="font-size:120%;">
			    				<li>Trả góp 0% qua 11 thẻ tín dụng:VP Bank, VIB, TPBank, Techcombank, Sacombank, Maritimebank, HSBC, Citibank, Shinhanbank, Standard Chatered, EximBank.</li>
			    				<li><h3>Giá Gốc:{{number_format($product->price)}} VND</h3></li>
			    				<!--<li><span>$350</span></li>-->
			    				
			    				<br />
			    				<li><p>Đánh Giá Người Mua :<strong style="background-color: green; color:white; border-radius: 5px;padding:0 2px;">{{$product->quality}}<i class="fa fa-star"></i></strong></p> </li>

			    			</ul>
			    			<a href="#">AddCart</a><br><br>

			    			<i>Gọi <u>1800-6601</u> để được tư vấn (miễn phí cuộc gọi).</i>
		    			</div>
		    			
		    			<div class="clear"> </div>
		    		</div>
		    		<div class="brand-history">
		    			<h3>Description :</h3>
		    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		    		
		    		</div>
		    		<div class="share">
		    			<ul>
		    				<li> <a href="#"><img src="{{asset('web/images/slide/facebook.png')}}" title="facebook" /> FaceBook</a></li>
		    				<li> <a href="#"><img src="{{asset('web/images/slide/twitter.png')}}" title="Twiiter" />Twiiter</a></li>
		    				<li> <a href="#"><img src="{{asset('web/images/slide/rss.png')}}" title="Rss" />Rss</a></li>
		    			</ul>
		    		</div>
		    		<div class="clear"> </div>
		    		
		    		</div>
		    		<div class="clear"> </div>
		    	<div class="menu_container">
						<p class="menu_head">Lorem Ipsum<span class="plusminus">+</span></p>
							<div class="menu_body" style="display: none;">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>
						<p class="menu_head">About Product<span class="plusminus">+</span></p>
							<div class="menu_body" style="display: none;">
							<p>theonlytutorials.com is providing a great varitey of tutorials and scripts to use it immediate on any project!</p>
							</div>
					</div>
			</div>
			
		    	</div>
		    	
		    </div>
		    <div class="clear"> </div>
		    </div>

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

