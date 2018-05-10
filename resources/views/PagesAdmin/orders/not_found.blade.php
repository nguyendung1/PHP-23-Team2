@extends('layouts.masterAdmin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Result Search
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <form action="admin/order/search" method="post" role="search">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                <div class="form-group">
                    <input class="form-control" name="search" placeholder="Type ID or Date">
                </div>
                <button type="submit" class="btn btn-default">Search</button>         
            </form>
            <h2>You must type in search.</h2>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop