@extends('layouts.masterAdmin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    List Order Search by "{{$search}}"
                </h1>
            </div>
            <?php
                function ChangeColor($str,$search){
                    return str_replace($search, "<span style='color:red;font-weight:bolder;'>$search</span>", $str);
                }
            ?>
            <!-- /.col-lg-12 -->
            <form action="admin/order/search" method="post" role="search">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                <div class="form-group">
                    <input class="form-control" name="search" placeholder="Type ID, Date or Name">
                </div>
                <button type="submit" class="btn btn-default">Search</button>         
            </form>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr align="center">
                        <th>ID of Order</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Order Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order as $od)
                    <tr class="odd gradeX" align="center">
                        <td>{!! ChangeColor($od->id,$search) !!}</td>
                        @if(isset($user))
                        <td>{!! ChangeColor($user->name,$search) !!}</td>
                        @else
                        <td>{{$od->user->name}}</td>
                        @endif
                        <td>{{$od->phone_number}}</td>
                        <td>{{$od->address}}</td>
                        <td>{{$od->total}}</td>
                        <td>
                            @if($od->status == '1')
                            {{"Complete"}}
                            @else
                            {{"Pending"}}
                            @endif
                        </td>
                        <td>{!! ChangeColor($od->date_order,$search) !!}</td>
                        <td class="center"><a href="admin/order/order_list/{{$od->id}}"> Detail Order</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop