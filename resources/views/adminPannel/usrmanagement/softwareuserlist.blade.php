@extends('adminPannel.master')
@section('title')
    User List
@endsection()

@section('body')
    <div class="card card-primary container">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">View User List</h2>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div>
            <div class="pull-right">
                <table>
                    <tr>
                        <td><label>Search</label></td>
                        <td><input type="search" class="table table-bordered table-striped  form-group "></td>
                    </tr>

                </table>


            </div>
            <table class="table table-bordered table-striped table-responsive-lg">
                <tr>
                    <th>Select</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>mobile</th>
                    <th>Alt.mobile</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td><input type="checkbox" name="checkbox" id="checkbox"></td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->useremail}}</td>
                    <td class="badge bg-primary ">{{$user->role}}</td>
                    <td>{{$user->phone1}}</td>
                    <td>{{$user->phone2}}</td>
                    <td>{{$user->useraddress}}</td>
                    <td>
                        <a href="{{route('individualuserview',['id'=>$user->id])}}" class="btn btn-success btn-sm">View</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                        <a href="{{route('individualuseredit',['id'=>$user->id])}}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection()
