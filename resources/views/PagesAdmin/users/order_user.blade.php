@extends('layouts.masterAdmin')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            List Order User
                        </h1>
                    </div>
                    <table class="table table-striped table-bordered table-hover" >                                       
                        <thead>
                            
                            <tr align="center">
                                <th>ID of Order</th>
                                <th>Name</th>           
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Date Order</th>                                
                                <th>Total</th>    
                            </tr>
                            
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr align="center">
                                <td>{{$order->id}}</td>
                                <td>{{$order->name}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->phone_number}}</td>
                                <td>{{$order->date_order}}</td>
                                <td>{{number_format($order->total)}}</td>
                            </tr>
                            @endforeach
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