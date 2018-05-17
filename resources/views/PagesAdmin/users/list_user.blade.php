@extends('layouts.masterAdmin')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            List User
                        </h1>
                        <div class="form-group">
                            @if (Session::has('success'))
                            <div class="alert alert-danger">
                              {{ Session::get('success') }}
                            </div>
                            @endif
                        </div>
                    </div>
                        
                    <!-- /.col-lg-12 -->
                   <form action="{{url('admin/user/list_user')}}" method="get" role="search">
                         
                        <div class="form-group">
                            
                            <input class="form-control" style="width:20em" id="date" type="date" value="" name="date" >
                            <div class="space20">&nbsp;</div>
                            <input class="form-control" value="" name="search" placeholder="Type Name or Email">
                        </div>
                            <button type="submit" class="btn btn-default">Search</button>
                            
                   </form>

                                    

                    <table class="table table-striped table-bordered table-hover" >                                       
                        <thead>
                            <tr align="center">
                                <th>ID of User</th>
                                <th>Name</th>           
                                <th>Email</th>                                    
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>Level</th>
                                <th>Order</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <?php 
                            if($user->is_admin == 0){
                                $role = "Admin";
                            }else{
                                $role = "Member";
                            }

                        ?>
                            <tr class="odd gradeX" align="center">
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->phone_number}}</td>
                                <td>{{$role}}</td>
                                <td class="center"><a href="{{url('admin/user/order_user/' . $user->id)}}">Detail</a></td>
                                <td class="center"><a href="{{url('admin/user/delete/' . $user->id)}}"><i class="fa fa-trash-o  fa-fw"></i></a></td>
                                <td class="center"><a href="{{url('admin/user/edit_user/' . $user->id)}}"><i class="fa fa-pencil fa-fw"></i> </a></td>
                            </tr>
                        @endforeach
                            
                        </tbody>
                    </table>
                    <div id="page">
                        {!! $users->links() !!}
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@stop