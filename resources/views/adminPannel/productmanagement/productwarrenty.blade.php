
@extends('adminPannel.master')
@section('title')
    user
@endsection()

@section('body')
    <div class="card card-primary container">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">Add Warrenty</h2>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="padding-top: 7px;padding-bottom: 7px">
                <form role="form" class="form-control">
                    <div>
                        <label>Product Warrenty(month )</label>
                        <input type="number" name="productwarrenty" class="form-control">
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
{{--        //List of Warrenty--}}

        <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="padding-top: 7px;padding-bottom: 7px">
                <table class="table table-bordered table-striped table-responsive-lg">
                    <tr>
                        <th>Warrenty</th>

                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>6 month</td>
                        <td>
                            <input type="submit" name="delete" value="view" class="btn btn-success btn-sm ">
                            <input type="submit" name="delete" value="delete" class="btn btn-danger btn-sm ">
                            <input type="submit" name="delete" value="edit" class="btn btn-primary btn-sm ">
                        </td>
                    </tr>
                    <tr>
                        <td>12 month</td>
                        <td>
                            <input type="submit" name="delete" value="view" class="btn btn-success btn-sm ">
                            <input type="submit" name="delete" value="delete" class="btn btn-danger btn-sm ">
                            <input type="submit" name="delete" value="edit" class="btn btn-primary btn-sm ">
                        </td>
                    </tr>
                    <tr>
                        <td>18 month</td>
                        <td>
                            <input type="submit" name="delete" value="view" class="btn btn-success btn-sm ">
                            <input type="submit" name="delete" value="delete" class="btn btn-danger btn-sm ">
                            <input type="submit" name="delete" value="edit" class="btn btn-primary btn-sm ">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-3"></div>
        </div>


    </div>
@endsection()

