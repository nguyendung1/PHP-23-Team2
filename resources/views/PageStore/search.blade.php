@extends('layouts.masterStore')
@section('content')
	
  <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    <div class="content-grids">
		    	
<div align="left">
	
	
    <div id="wrap" align="center">
		
		<a id="show_cart" href="javascript:void(0)">Sản Phẩm Bạn Cần Tìm</a>
		
		<ul>
			
			
			<!-- Detail Boxes for above four li -->
			
             
			<!---->
		   	@if(isset($products))
		   	    <h2>Có {{count($products)}} Sản Phẩm được tìm thấy</h2>
		   	   @foreach($products as $product)
                  <li id="1">
				    <a href="{{url('viewDetail/'.$product->id)}}"><img src="{{asset('web/images/total')}}/{{$product->image}}" class="items" alt="{{$product->name}}" /></a>
				       
				     <br clear="all" />
				   <div><a href="{{url('viewDetail/'.$product->id)}}">{{$product->name}}</a><br><br>
					<p>{{number_format($product->price)}} VND</p><br>
					<p><strong style="background-color: green; color:white; border-radius: 5px;padding:0 2px;">{{$product->quality}}<i class="fa fa-star"></i></strong></p> 
                       
				</div>
		   	</li>
               @endforeach
		    @else
		            <h3>Không Tìm Thấy Kết Quả Phù Hợp!</h3>

		   		@endif  
		</ul>
        
  
	</div>
	@if(isset($products))<div class="w3-container"><div class="row">{{$products->links()}}</div>@endif
	 
		
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
							<li><a href="{{url('searchFollowPrice?price1=500000&price2=1000000')}}">Dưới 1 triệu</a></li>
							<li><a href="{{url('searchFollowPrice?price1=1000000&price2=3000000')}}">Từ 1-3 triệu</a></li>
							<li><a href="{{url('searchFollowPrice?price1=3000000&price2=6000000')}}">Từ 3-6 triệu</a></li>
							<li><a href="{{url('searchFollowPrice?price1=6000000&price2=10000000')}}">Từ 6-10 triệu</a></li>
							<li><a href="{{url('searchFollowPrice?price1=10000000&price2=15000000')}}">Từ 10-15 triệu</a></li>
							<li><a href="{{url('searchFollowPrice?price1=15000000&price2=50000000')}}">Trên 15 triệu</a></li>
						</ul>
				  		
		    	</div>
		    </div> 
		    <div class="clear"> </div>
		    </div>
     </main>
	@stop

