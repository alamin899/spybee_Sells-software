@extends('adminPannel.master')
@section('title')
    Add Customer
@endsection()

@section('body')
    <div class="card card-primary container">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">Add customer</h2>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" class="form-control">
            <div class="row">
                <div class="col">
                    <label>Customer Name</label>
                    <input type="text" class="form-control"  name="customername">
                </div>
                <div class="col">
                    <label>Customer Email</label>
                    <input type="email" class="form-control"  name="customeremail">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Customer Phone(1)</label>
                    <input type="number" class="form-control"  name="phone1">
                </div>
                <div class="col">
                    <label>Customer Phone(2)</label>
                    <input type="number" class="form-control"  name="phone2">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>Customer Address </label>
                    <textarea class="form-control"  name="customeraddress"></textarea>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label>Image</label>
                    <input type="file" class="form-control" name="profileimage">
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success btn-xl">Submit</button>
            </div>
        </form>
    </div>
@endsection()
