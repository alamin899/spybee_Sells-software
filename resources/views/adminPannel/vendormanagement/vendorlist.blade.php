@extends('adminPannel.master')
@section('title')
    Vendor List
@endsection()

@section('body')
    <div class="card card-primary container">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">View Vendor List</h2>
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
                    <th>Vendor Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Contact Phone</th>
                    <th>Short Address</th>
                    <th>Action</th>
                </tr>
                @foreach($vendors as $vendor)
                <tr>
                    <td><input type="checkbox" name="checkbox" id="checkbox"></td>
                    <td>{{$vendor->vname}}</td>
                    <td>{{$vendor->vemail}}</td>
                    <td>{{$vendor->vphone}}</td>
                    <td>{{$vendor->cpmob1}}</td>

                    <td>{{$vendor->vsaddress}}</td>
                    <td>
                        <a href="{{route('individualvendor',['id'=>$vendor->id])}}" name="view" class="btn btn-success btn-sm" >view</a>
                        <input type="submit" name="delete" value="edit" class="btn btn-primary btn-sm ">
                        <a href="{{route('indvendorupdate',['id'=>$vendor->id])}}" name="edit" class="btn btn-primary btn-sm">edit</a>
                    </td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection()



