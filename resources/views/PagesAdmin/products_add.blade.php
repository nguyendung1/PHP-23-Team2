




@extends('layouts.masterAdmin')

@section('content')
    <h1 class="page-header">Trang Thêm 
                        Sản Phẩm
                        </h1>

            {!!Form::open(['url'=>'add','method'=>'post'])!!}
              @include('form.formAdmin')
            {!!Form::close()!!}            

            
@stop