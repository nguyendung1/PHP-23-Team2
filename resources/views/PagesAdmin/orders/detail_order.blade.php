@extends('layouts.masterAdmin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    List Order Detail
                </h1>
            </div>
            <!-- /.col-lg-12 -->               
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>  
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->orderDetail as $od)
                    <tr class="odd gradeX" align="center">
                        <td>{{$od->id}}</td>
                        <td>{{ $od->product ? $od->product->name : ''}}</td>
                        <td>{{$od->quantity}}</td>
                        <td>{{$od->price}}</td>
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