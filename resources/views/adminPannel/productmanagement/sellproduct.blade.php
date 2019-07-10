
@extends('adminPannel.master')
@section('title')
    Sells product
@endsection()

@section('body')
    <div class="card card-primary container">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">Sells product </h2>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" class="form-control">
            <div class="row">
                <div class="col-md-2 form-control">
                    <label>Customer</label>
                    <select class="form-control">
                        <option>--select--</option>
                        <option>abul</option>
                    </select>

                </div>
                <div class="col-md-5"></div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col form-control">
                            <label>Date</label>
                            <input type="date" name="selldate" >
                        </div>
                        <div class="col form-control">
                            <label>Sells No</label>
                            <input type="text" name="sellsno">
                        </div>
                    </div>

                </div>

            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-primary">
                        <div class="card-header" style="background: #191b19;">
                            <h2 class="card-title">Customer Address</h2>
                        </div>
                        <div>
                            <textarea class="form-control" rows="4" ></textarea>
                        </div>

                    </div>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-3"></div>

            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <table class="table table-bordered table-responsive table-striped ">
                        <tr>
                            <th>Product Id</th>
                            <th>Product Model</th>
                            <th>Product Brand</th>
                            <th>Product Details</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="prdid1">
                            </td>
                            <td>
                                <input type="text" name="prdmodel1">
                            </td>
                            <td>
                                <input type="text" name="prdbrand1">
                            </td>
                            <td>
                                <input type="text" name="prddetil1">
                            </td>
                            <td>
                                <input type="text" name="amount1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="prdid1">
                            </td>
                            <td>
                                <input type="text" name="prdmodel1">
                            </td>
                            <td>
                                <input type="text" name="prdbrand1">
                            </td>
                            <td>
                                <input type="text" name="prddetil1">
                            </td>
                            <td>
                                <input type="text" name="amount1">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" name="prdid1">
                            </td>
                            <td>
                                <input type="text" name="prdmodel1">
                            </td>
                            <td>
                                <input type="text" name="prdbrand1">
                            </td>
                            <td>
                                <input type="text" name="prddetil1">
                            </td>
                            <td>
                                <input type="text" name="amount1">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" name="prdid1">
                            </td>
                            <td>
                                <input type="text" name="prdmodel1">
                            </td>
                            <td>
                                <input type="text" name="prdbrand1">
                            </td>
                            <td>
                                <input type="text" name="prddetil1">
                            </td>
                            <td>
                                <input type="text" name="amount1">
                            </td>
                        </tr>

                    </table>
                </div>

            </div>

            <div >
{{--                <div class="col-md-10"></div>--}}
{{--                <div class="col-md-3">--}}
                <div class="pull-right" style="padding-right: 35px;">
                    <label>Total Amount:</label>
                    <label>1000000</label>
                </div>

{{--                </div>--}}
            </div>





            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success btn-block">Sells Product</button>
            </div>
        </form>
    </div>
@endsection()

