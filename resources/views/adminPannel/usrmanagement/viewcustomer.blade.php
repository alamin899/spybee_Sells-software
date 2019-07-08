@extends('adminPannel.master')
@section('title')
     Customer List
@endsection()

@section('body')
    <div class="card card-primary container">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">View Customer List</h2>
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
                    <th>Company</th>
                    <th>Email</th>
                    <th>Customer Contact</th>
                    <th>mobile</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                @foreach($customers as $customer)
                <tr>
                    <td><input type="checkbox" name="checkbox" id="checkbox"></td>
                    <td>{{$customer->customername}}</td>
                    <td>{{$customer->customercompany}}</td>
                    <td>{{$customer->customeremail}}</td>
                    <td>{{$customer->customercontact}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->customeraddress}}</td>

                    <td>
                        <input type="submit" name="delete" value="view" class="btn btn-success btn-sm ">
                        <input type="submit" name="delete" value="delete" class="btn btn-danger btn-sm ">
                        <input type="submit" name="delete" value="edit" class="btn btn-primary btn-sm ">
                    </td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection()
