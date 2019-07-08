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
                <tr>
                    <td><input type="checkbox" name="checkbox" id="checkbox"></td>
                    <td>VERBAL</td>
                    <td>info@verbalbd.com</td>
                    <td>029577035</td>
                    <td>01777231234</td>

                    <td>120/A,R.S Bhaban,(2nd floor)suite-310,motijheel</td>
                    <td>
                        <input type="submit" name="delete" value="view" class="btn btn-success btn-sm ">
                        <input type="submit" name="delete" value="edit" class="btn btn-primary btn-sm ">
                        <input type="submit" name="delete" value="delete" class="btn btn-danger btn-sm ">
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection()



