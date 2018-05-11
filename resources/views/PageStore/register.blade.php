@extends('layouts.masterStore')
@section('content')
<h2 style="margin-left: 20%;" >Chào mừng đến với Mobilestore. Đăng Kí ngay!</h2>
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
			
		<form action="{{url('dangky')}}" method="post" style="margin-left: 30%;">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
					
					<div class="col-sm-6">
						
						<div class="space20">&nbsp;</div>
							
						<div class="form-block">
							<label for="email">Địa chỉ email: </label>
							<input type="email" class="form-control" id="email" name="email" >
							@if($errors->has('email'))
								<p class="control text-danger">{{$errors->first('email')}}</p>
							@endif
						</div>

						<div class="form-block">
							<label for="your_last_name">Tên tài khoản: </label>
							<input type="text" class="form-control" id="your_last_name" name="name" >
						</div>

						<div class="form-block">
							<label for="adress">Địa chỉ:</label>
							<input type="text" class="form-control" id="adress" value="" name="address" >
							@if($errors->has('address'))
								<p class="text-danger">{{$errors->first('address')}}</p>
							@endif
						</div>


						<div class="form-block">
							<label for="phone">Điện thoại:</label>
							<input type="text" class="form-control" id="phone" name="phone_number" >
							@if($errors->has('phone_number'))
								<p  class="text-danger">{{$errors->first('phone_number')}}</p>
							@endif
						</div>
						<div class="form-block">
							<label for="phone">Mật khẩu:</label>
							<input type="password" class="form-control" id="phone" name="password" >
							@if($errors->has('password'))
								<p  class="text-danger">{{$errors->first('password')}}</p>
							@endif
						</div>
						<div class="form-block">
							<label for="phone">Nhập lại mật khẩu:</label>
							<input type="password" class="form-control" id="phone" name="re-password" >
							@if($errors->has('re-password'))
								<p class="text-danger">{{$errors->first('re-password')}}</p>
							@endif

						</div>
						<div class="form-block">
							<div class="space20">&nbsp;</div>
							<button type="submit" class="btn btn-primary">Đăng kí</button>
						</div>
					</div>
				
				</div>
			</form>
	</div> <!-- #content -->
</div> <!-- .container -->
@stop