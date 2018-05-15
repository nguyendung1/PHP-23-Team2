
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
		  <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    	<div class="about">
		    		
		    		<div class="section group">
					<div class="col_1_of_3 span_1_of_3 about-frist">
						<h3>Bạn Đã Biết Gì Về Chúng Tôi?</h3>
						<h5>MobileStore</h5>
						<p>Là một thành viên tự hào của gia đình MobileLowLab, bạn không phải đi ra khỏi con đường của bạn tìm thấy chúng tôi - chỉ cần tìm chúng tôi nơi các sản phẩm Mobile được bán. Chúng tôi có 100 địa điểm ở Việt Nam,Công Ty san xuất và phân phối đặt trụ sớ tại Singapore.Vì vậy lần sau bạn đi mua sắm hàng tạp hóa, hãy ghé qua và nói xin chào!.</p>
						<h3>Nếu sản phẩm có lỗi kỹ thuật gì hãy liên hệ ngay với chúng tôi. </h3>
						<h3>Hãng Sản Xuất Đang Được Phân Phối</h3>

						
						<ul>
							@if(isset($categories))
							@foreach($categories as $category)

							<li style="float: left;font-size:120%;" ><a class="w3-text-green" href="{{url('store/'.$category->id)}}">{{$category->name}},</a></li>

							@endforeach
							@endif
							
						</ul>
					</div>
					<div class="col_1_of_3 span_1_of_3 about-centre">
						<h3>HTC Desire 628 Dual SIM</h3>
						<a href="#"><img src="{{asset('web/images/slide/grid-img3.jpg')}}"></a>
						
						<p style="font-weight:bold;font-size: 100%;">
						Hãng sản xuất: HTC<br>Kích thước màn hình:5.0"Độ phân giải màn hình:720 x 1280px<br>Hệ điều hành:Android OS<br>Chip xử lý (CPU):Tám nhân 1.3 GHz<br>Máy ảnh chính:13 MP<br>RAM:3 GB<br> Bộ nhớ trong:32GB<br>Dung lượng pin (mAh):2200 mAh.<br>..Sản Phẩm sẽ được bán chính thức vào ngày 03-06-2018.</p>   

						
					</div>
					<div class="col_1_of_3 span_1_of_3 quites">
						<h3> Nokia 6 2018</h3>
						<blockquote><p style="font-weight:bold;font-size: 100%;"><img src="{{asset('web/images/slide/grid-img2.jpg')}}">Hãng sản xuất: Nokia<br>
								Kích cỡ màn hình1080 x 1920 pixels (FHD),5.5 inches (~401 ppi)<br>
								Bộ nhớ trong :32 GB, 3 GB RAM<br>
								Khe cắm thẻ  nhớ : microSD (TransFlash) hỗ trợ lên đến 200GB<br>
								Camera chính : 16 MP, f/2.0, phase detection autofocus, dual-LED (dual tone) flash<br>
								Camera phụ : 8 MP, f/2.0, 1.12 µm pixel size, 1080p<br>Dung lượng pin (mAh):3200 mAh<br>..Sản Phẩm sẽ được bán chính thức vào ngày 28-06-2018.
								</p></blockquote>

					
								 
						<br /><br />
					</div>
						
					<div class="clear"> </div>
					<div class="section group" style="width: 100%; " >
						 <div class="cont span_3_of_3" style="font-weight:bold;font-size: 100%;">
						       <h3 class="w3-green"> Chăm Sóc Khách Hàng MoBile Store</h3>
							   	<p>Mobile Store Tự hào là nơi Bảo hành Sửa Chữa  uy tín, với đội ngũ kỹ thuật viên được đào tạo chuyên nghiệp, dày dạn kinh nghiệm. Những chiếc Smartphone của quý khách sẽ được sửa chữa một cách nhanh chóng và được bảo hành 6 tháng sau sửa chữa, giúp khách hàng yên tâm trong quá trình sửa dụng.</p>
							   <p>Với kinh nghiệm và nghiên cứu chuyên sâu trong việc sửa chữa các thiết bị Android, Hnammobile cam kết mọi kinh kiện đều nguyên zin và đảm bảo chất lượng tốt nhất, thời gian thay sửa nhanh nhất các thiết bị như Samsung, Asus, Xiaomi, Sony, Oppo, Wiko, ....</p>


						     				    
						</div>
						
		        </div>
				</div>
				
		    	</div>
		    	</div>
		    	
		    </div>
		    <div class="clear"> </div>
		@stop


