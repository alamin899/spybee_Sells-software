@extends('adminPannel.master')
@section('title')
    Add Vendor
@endsection()

@section('body')
    <div class="card card-primary container">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">Add Vendor</h2>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" class="form-control">
            <div class="row">
                <div class="col">
                    <label>Vendor Name</label>
                    <input type="text" class="form-control"  name="vname">
                </div>
                <div class="col">
                    <label>Vendor Email</label>
                    <input type="email" class="form-control"  name="vemail">
                </div>
                <div class="col">
                    <label>Vendor Phone</label>
                    <input type="number" class="form-control"  name="vphone">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Contact Person Name</label>
                    <input type="text" class="form-control"  name="cpname">
                </div>
                <div class="col">
                    <label>Contact Person email</label>
                    <input type="email" class="form-control"  name="cpemail">
                </div>
                <div class="col">
                    <label>Contact Person mobile</label>
                    <input type="number" class="form-control"  name="cpmob1">
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label>Contact Person Alt.mobile</label>
                    <input type="number" class="form-control"  name="cpmob2">
                </div>
                <div class="col">
                    <label>Area</label>
                    <select class="form-control" name="varea">
                        <option value="0">--Select Vendor Area--</option>
                    </select>
                </div>

                    <div class="col">
                        <label>Company Name</label>
                        <input type="text" class="form-control" name="companyname">
                    </div>



            </div>
            <div class="row">
                <div class="col">
                    <label>Vendor Short Address</label>
                    <textarea class="form-control" name="vsaddress"></textarea>
                </div>

                <div class="col">
                    <label>Vendor Full Address</label>
                    <textarea class="form-control" name="vfaddress"></textarea>
                </div>
            </div>


            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success btn-block">Add Vendor</button>
            </div>
        </form>
    </div>
@endsection()

