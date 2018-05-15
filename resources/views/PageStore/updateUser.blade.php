@extends('layouts.masterStore')
@section('content')
<h2 style="margin-left: 35%;" >Thông Tin Tài Khoản!</h2>
<div class="col-md-12">  
          	<div class="form-group text-center">
          	@if (Session::has('success'))
		        <div class="alert alert-success">
		          {{ Session::get('success') }}
		        </div>
			@endif
			</div>
</div>          	
<div class="container">
	<div id="content">
			
		<form action="{{url('update/')}}" method="post" style="margin-left: 30%;">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="email" value="{{$user->email}}">
				<div class="row">
					
					<div class="col-sm-6">
						
						<div class="space20">&nbsp;</div>
							
						<div class="form-block">
							<label for="email">Email: </label>
							<span style="padding:5px">{{$user->email}}</span>
							
						</div>

						<div class="form-block">
							<label for="your_last_name">Tên tài Khoản: </label>
							<input type="text" class="form-control" id="your_last_name" name="name" value="{{$user->name}}" >
							@if($errors->has('name'))
				                <p class="control text-danger">{{$errors->first('name')}}</p>
				            @endif
						</div>

						<div class="form-block">
							<label for="address">Địa chỉ:</label>
							<input type="text" class="form-control" id="address" name="address" value="{{$user->address}}">
							@if($errors->has('address'))
				                <p class="control text-danger">{{$errors->first('address')}}</p>
				            @endif
							
						</div>


						<div class="form-block">
							<label for="phone">Điện thoại:</label>
							<input type="text" class="form-control" id="phone" name="phone_number" value="{{$user->phone_number}}" >
							@if($errors->has('phone_number'))
				                <p class="control text-danger">{{$errors->first('phone_number')}}</p>
				            @endif
							
						</div>
						
					</div>	
				</div>
					<div class="col-md-6">
			          <div class="space20">&nbsp;</div>
			          <button type="submit" value="Đăng Nhập" class="btn btn-primary">Submit</button>
			      </div>
			</form>
	</div> <!-- #content -->
</div> <!-- .container -->
@stop