@extends('layouts.masterAdmin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Edit</small>
                </h1>
            </div>
            
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                
                <form action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="name" >
                </div>
               
                <div class="form-group">
                    <label>Price</label>
                    <input class="form-control" name="price" >
                </div>
               
                <div class="form-group">
                    <label>Quality</label>
                    <input class="form-control" name="quality" >
                </div>
               
                <div class="form-group">
                    <label>Description</label>
                    <input class="form-control" name="description" >
                </div>
               
                <div class="form-group">
                    <label>Picture</label>
                    <input class="form-control" type="file" name="image">
                </div>
              
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
                    @foreach($category as $cg)
                    <!-- <option value="{{$cg->id}}">{{$cg->name}}</option>       -->  
                    <option value="{{$cg->id}}">{{$cg->name}}</option>                        
                    @endforeach
                    </select>
                </div>
               
                <div>
                    <br><button type="submit" class="btn btn-default">Category Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
              
                <form>
            </div>
        </div>
    </div>
</div>
@stop