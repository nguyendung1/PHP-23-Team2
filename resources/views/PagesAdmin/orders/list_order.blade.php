@extends('layouts.masterAdmin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    List Order
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <form action="admin/order/search" method="post" role="search">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                <div class="form-group">
                    <input class="form-control" name="search" placeholder="Type ID, Date or Name">
                </div>
                <button type="submit" class="btn btn-default">Search</button>         
            </form>
            @if(session('thongbao_delete'))
            <div class="alert alert-success">
                {{session('thongbao_delete')}}
            </div>
            @endif                   
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID of Order</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Order Date</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order as $od)
                    <tr class="odd gradeX" align="center">
                        <td>{{$od->id}}</td>
                        <td>{{$od->user->name}}</td>
                        <td>
                            @if($od->status == '1')
                            {{"Complete"}}
                            @elseif($od->status == '2')
                            {{"Pending"}}
                            @else
                            {{"Cancel"}}
                            @endif
                        </td>
                        <td>{{$od->date_order}}</td>
                        <td class="center"><a href="admin/order/order_list/{{$od->id}}"> Detail Order</a></td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" align="center">All Price: </td>
                        <td colspan="2" align="center">{{$valueTotal}}</td>
                    </tr>                 
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop