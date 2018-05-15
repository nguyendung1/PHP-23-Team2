@extends('layouts.masterStore')
@section('content')
<h2 style="margin-left: 30%;" >Đăng Nhập Ngay!</h2>
      <div class="col-md-12">  
          <div class="form-group text-center">
          @if (Session::has('error'))
              <div class="alert alert-danger" ">
                  {{ Session::get('error') }}
              </div>
          @endif
          </div><!-- form-group -->
      </div>
<form action="{{url('dangnhap')}}" method="post" style="margin-left: 30%;">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="col-md-6">
          <div class="space20">&nbsp;</div>
          <div class="form-block">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              @if($errors->has('email'))
                <p class="control text-danger">{{$errors->first('email')}}</p>
              @endif
          </div><!-- form-group -->
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
              @if($errors->has('password'))
                <p  class="text-danger">{{$errors->first('password')}}</p>
              @endif
          </div><!-- form-group -->
      </div>
      <div class="col-md-6">
          <div class="form-check">
              
              <label class="form-check-label">
                <a href="{{url('forgotPass')}}" style="color: blue">Quên Tài Khoản</a>
              </label>
          </div>
      </div>
      <div class="col-md-6">
          <div class="space20">&nbsp;</div>
          <button type="submit" value="Đăng Nhập" class="btn btn-primary">Submit</button>
      </div>
</form>          
@stop