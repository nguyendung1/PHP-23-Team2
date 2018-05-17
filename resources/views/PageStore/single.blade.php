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

		<!-- boostrap-->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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
                   


		  	  }
		  	   .header-top-nav ul li a{
                   display: block;

		  	  } 
		  	   .header-top-nav ul li a{
                   display: block;
               
		  	  }   
		  	   .header-top-nav ul ul{
                   display: none;
                   position: absolute;
                   top: 100%;
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
			<div class="header-top-nav">
			   <ul>	
			  		
					<li><a href="#">Phát Triển</a></li>
					<li><a href="#">Thanh Toán</a></li>

				    <li><a href="{{url('shoppingCart')}}"><i style="font-size: 2em;" class="fa fa-shopping-cart"></i>    <span style="color:white;background-color:orange;border-radius:40%; font-size:1.5em;padding:1px 3px;">@if (Cart::content()){{count(Cart::content())}}@else (Trống) @endif </span></a></li>
					
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
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    <div class="content-grids" style="width: 100%;">
		    	<div class="details-page">
		    		<div class="back-links">
		    			<ul>
		    				<li><a href="{{url('/')}}">Home</a><img src="{{asset('web/images/slide/arrow.png')}}" alt="caret image"></li>
		    				<li><a href="{{url('store/'. $product->id)}}">Product</a><img src="{{asset('web/images/slide/arrow.png')}}" alt="caret  image"></li>
		    				<li><a href="{{url('viewDetail/' . $product->id )}}">ProductDetail</a><img src="{{asset('web/images/slide/arrow.png')}}" alt="caret  image"></li>
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
		    				    <li><h3>Thuộc Hãng:<a  class="active1" href="{{url('store/'.$category->id)}}"><span>{{$category->name}}</span></a></h3></li><br>
		    				
		    				    <li><h3>Thông Số Kỹ Thuật</h3></li><br>
		    				    <li>Màn Hình :{{$technology->screen}}</li><br>
		    				    <li>Hệ Điều Hành : <a class="w3-text-blue" href="#" >{{$technology->system}}</a></li><br>
		    				    <li>Camera: {{$technology->camera}}</li><br>
		    				    
		    				    <li>CPU:{{$technology->cpu}}<a class="w3-text-blue" href="#">Apple A11 Bionic 6 nhân</a></li><br>
		    				    <li>RAM :  {{$technology->ram}}  GB</li><br>
		    				    <li>Bộ nhớ trong:{{$technology->rom}} GB</li><br>
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
			    			<a href="{{url('addCart/'. $product->id)}}">Thêm Vào Giỏ Hàng</a><br><br>

			    			<i>Gọi <u>1800-6601</u> để được tư vấn (miễn phí cuộc gọi).</i>
		    			</div>
		    			
		    			<div class="clear"> </div>
		    		</div>
		    		<div class="brand-history">
		    			<h3>Note:</h3>
		    			<p>Khi đã xem chi tiết về sản phẩm bạn có thể nhấn vào mua ngay hoặc là thêm vào giỏ hàng hoặc nếu có vấn để gì thắc có thế để lại bình luận ở phía dưới chúng tôi sẽ trả lời bạn nhanh nhất có thế!Hy Vọng bạn sẽ hài lòng với sản phẩm và phương thức chăm sóc khách hàng của chúng tôi .</p>
		    		
		    		</div>
		    		<div class="share">
		    			<ul>
		    				<li> <a href="#"><img src="{{asset('web/images/slide/facebook.png')}}" title="facebook" /> FaceBook</a></li>
		    				<li> <a href="#"><img src="{{asset('web/images/slide/twitter.png')}}" title="Twiiter" />Twiiter</a></li>
		    				<li> <a href="#"><img src="{{asset('web/images/slide/rss.png')}}" title="Rss" />Rss</a></li>
		    			</ul>
		    		</div>
		    		<div class="clear"> </div><hr>
		    		<!-- danh gia cua nguoi dung  -->	
		    		<div class="menu_container">
						<div class="container" style="height: auto;">
							<form action="{{url('comment')}}" method="post">
                          <input type="hidden" name="_token" value="{{csrf_token()}}">
                          <legend> * Gữi Nhận Xét Của Bạn Về Sản Phẩm<span class="w3-text-red">*</span>:</legend>
                            <div class="form-group">
                           <textarea name="content" class="form-control" rows="3" cols="70" id="comment" placeholder="Mời Bạn nhập Đánh Giá ở đây..." required></textarea><br>
                           <input type="hidden" name="id" value="{{$product->id}}">
                            
                           <input type="submit"  value="Gữi Đánh Giá" class="btn btn-info">
                           <input type="reset" name="" value="Hủy Đánh Giá" class="btn btn-danger">
                           <p>Một đánh giá có ích thường dài từ 100 ký tự trở lên</p>
                            </div>
                             
                         </form>
                          	<div class="form-block">
									<input type="submit" name="" value="Đặt Hàng" class="btn btn-info">
								      @if (Session::has('status'))
										<div class="alert alert-success">
										<h3 class="w3-text-red">{{ Session::get('status') }}</h3>
										</div>
									   @endif
												
										</div><hr>
                          <h3>Khách Hàng Nhận Xét()</h3>
                          
                           
                         <div style="height:" class="w3-card">
                           <div style="margin-left:3em;" >
                           @if (isset($product->comments)) 
                           @foreach($product->comments as $comments) 

                         	<img style="float: left;" src="{{asset('web/images/slide/admin.png')}}" height="20">
                         	<h5>Bởi:<i style="color:orange;"> {{$comments->name}}</i> | {{$comments->created_at}} </h5><br><p><b>Bình Luận:</b>  
                         	{{$comments->content}} </p>
                            <hr>
                          @endforeach
                          @endif
                          </div>
                       </div>
                    </div> 
                      <!-- End Comment -->   
		    		
		    		</div>
		    		<div class="clear"> </div>
		    	
		    	
			</div>
			
		    	</div>
		    	
		    </div>
		    <div class="clear"> </div>
		    </div>

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
		
		<div class="clear"> </div>
		<div class="wrap">
		<div class="copy-right">
			<p>Mobilestore  &#169	 All Rights Reserved | Design By <a href="http://w3layouts.com/">W3Layouts</a></p>
		</div>
		</div>
		</div>
	</body>
</html>

