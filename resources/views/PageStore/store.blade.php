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
         <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    <div class="content-grids">
		    	
<div align="left">
	
	
    <div id="wrap" align="center">
		
		<a id="show_cart" href="javascript:void(0)">ĐIỆN THOẠI {{$category->name}}({{count($products)}})</a>
		
		<ul>
			
			
			<!-- Detail Boxes for above four li -->
			
             <h1> </h1>
			<!---->
		   @if(isset($products))
		   @foreach($products as $product)	

			<li id="1">
				<img src="{{asset('web/images')}}/{{$category->name}}/{{$product->image}}" class="items" alt="{{$category->name}}" />
				
				<br clear="all" />
				<div><a href="#">{{$product->name}}</a><br><br>
					<p>{{number_format($product->price)}} VND</p><br>	
					<p><strong style="background-color: green; color:white; border-radius: 5px;padding:0 2px;">{{$product->quality}}<i class="fa fa-star"></i></strong></p> 
                     
                     
				</div>
		   	</li>
		   	@endforeach

		   	@endif    		
		</ul>

	</div>
	 
		
</div>

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
							
							<li><a href="{{url('duoi_1_trieu')}}">Dưới 1 triệu</a></li>
							<li><a href="{{url('1_den_3_trieu')}}">Từ 1-3 triệu</a></li>
							<li><a href="{{url('3_den_6_trieu')}}">Từ 3-6 triệu</a></li>
							<li><a href="{{url('6_den_10_trieu')}}">Từ 6-10 triệu</a></li>
							<li><a href="{{url('10_den_15_trieu')}}">Từ 10-15 triệu</a></li>
							<li><a href="{{url('tren_15_trieu')}}">Trên 15 triệu</a></li>
						</ul>	
				  		
		    	</div>
		    </div>
		    <div class="clear"> </div>
		    </div>
     </main>
	@stop

