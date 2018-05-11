@extends('layouts.masterAdmin')
@section('content')
	    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            List Customer
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                   <form action="{{url('admin/user/list_user')}}" method="get" role="search">
                    
                        <div class="form-group">
                            <input class="form-control" style="width:20em" id="date" type="date" value="@if(!empty($date)) {{$date}} @endif" name="date" >
                            <div class="space20">&nbsp;</div>
                            <input class="form-control" value="@if(!empty($search)){{$search}} @endif" name="search" placeholder="Type Name or Email">
                        </div>
                            <button type="submit" class="btn btn-default">Search</button>
                            
                   </form>

                                    

                    <table class="table table-striped table-bordered table-hover" >                                       
                        <thead>
                            <tr align="center">
                                <th>ID of User</th>
                                <th>Name</th>           
                                <th>Product</th>
                                <td>Image</td>                                    
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                    <div id="page">
                        
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@stop