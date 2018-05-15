@extends('layouts.masterStore')
@section('content')
<?php 
   $user = Auth::user();
?>
{!! Form::open(['url' => 'admin/changePass', 'method' => 'post','files'=>true,'id'=>'profile-form']) !!}
<h2 style="margin-left: 30%;" >Đổi Password</h2>
<div class="col-md-12">  
          <div class="form-group text-center">
          @if (Session::has('success'))
              <div class="alert alert-success" ">
                  {{ Session::get('success') }}
              </div>
          @endif
          </div><!-- form-group -->
</div>
<div class="space20">&nbsp;</div>
<div class="content" style="margin-left: 30%;">
        <input type="hidden" name="email" value="@if(!empty($user)){{$user->email}}@endif">
        <div>
            <label for="">Tên tài khoản: </label> <span style="padding:5px">{{$user->name}}</span>
        </div> 
        <div>
            <label for="">Email: </label> <span style="padding:5px">{{$user->email}}</span>
        </div>
        <div>
            <label for="">Địa chỉ: </label> <span style="padding:5px" >{{$user->address}}</span>
        </div> 
        <div>
            <label for="">Số Điện thoại: </label> <span style="padding:5px">{{$user->phone_number}}</span>
        </div> 
      <!-- /.box-body -->
        <div class="form-changepass" style="display: block;">
            <div class="form-block">
                  <label for="">Mật khẩu cũ :</label> <input style="width:300px;" type="password" name="password_old" class="form-control" value="{{old('password_old')}}">
                  @if($errors->has('password_old'))
                      <p class="text-danger">{{$errors->first('password_old')}}</p>
                  @endif
            </div>
      
        
            <div class="form-block" >
                  <label for="">Mật khẩu mới :</label> <input style="width:300px;" type="password" name="password_new" class="form-control" value="{{old('password_new')}}">
                  @if($errors->has('password_new'))
                      <p class="text-danger">{{$errors->first('password_new')}}</p>
                  @endif
            </div>
            <div class="form-block">
                  <label for="">Nhập lại mật khẩu mới :</label> <input style="width:300px" type="password" name="re-password" class="form-control"  value="{{old('re-password')}}">
                  @if($errors->has('re-password'))                
                      <p class="text-danger">{{$errors->first('re-password')}}</p>
                  @endif
            </div>
            <div class="space20">&nbsp;</div>
            <button type="submit" class="btn btn-primary"> Cập nhật</button>
            
        </div>
</div><!-- content -->
        
{!! Form::close() !!}
@stop