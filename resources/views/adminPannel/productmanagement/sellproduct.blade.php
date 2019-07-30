@extends('adminPannel.master')
@section('title')
    Sells product
@endsection()

@section('body')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
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
                    <select class="form-control customer"  name="customer" id="selldropdown">
                        <option value="0">--select--</option>
                        @foreach($customers as $customer)
                        <option  value="{{$customer->phone}}">{{$customer->customername}} {{$customer->phone}}</option>
                            @endforeach
                    </select>

                </div>
                <div class="col-md-5"></div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col form-control">
                            <label >Date</label><br>
                            <input type="date" value="<?php echo date("Y-m-d"); ?>" name="selldate">
                        </div>
                        <div class="col form-control">
                            <label>Sells No</label>
                            <input type="text" name="sellsno" value="A0011NV{{$invoices}}">
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
                        <div id="customeraddress">
                            <textarea class="form-control"  >

                            </textarea>
                        </div>

                    </div>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-3"></div>

            </div>
            <hr>
            <div class="row">
                    <table class="table table-bordered table-responsive table-striped ">
                        <tr>
                            <th>SL</th>
                            <th>Des.</th>
                            <th>serial</th>
                            <th>Qty</th>
                            <th>Unit Price</th>
                            <th>Warrenty</th>
                            <th>Amount</th>
                        </tr>
                        <tr class="form-group">
                            <td>
                                1
                            </td>

                            <td>
                                <textarea name="row[0][description]" cols="30" class="form-control"></textarea>

                            </td>
                            <td><input type="text" name="row[0][serial]" id="dynamic" data-role="tagsinput"></td>
                            <td>
                                <input type="number" name="row[0][Qty]" class="form-control" id="quantity1" value="1" >

                            </td>
                            <td>
                                <input type="number" name="row[0][unitprice]" class="form-control" id="unitprice1">

                            </td>

                            <td>
                                <input type="text" name="row[0][warrenty]" class="form-control">

                            </td>
                            <td>

                                <input type="text" name="row[0][amount]" class="form-control" value="0" id="total1">

                            </td>

                        </tr>

                        <tr class="form-group">

                            <td>
                                2
                            </td>
                            <td>
                                <textarea name="row[1][description]"  class="form-control"></textarea>
                            </td>
                            <td><input type="text" name="row[1][serial]"   data-role="tagsinput"></td>
                            <td>
                                <input type="number" name="row[1][Qty]" class="form-control" value="1" id="quantity2">
                            </td>
                            <td>
                                <input type="number" name="row[1][unitprice]" class="form-control" id="unitprice2">
                            </td>

                            <td>
                                <input type="text" name="row[1][warrenty]" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="row[1][amount]" class="form-control" value="0" id="total2">
                            </td>

                        </tr>

                        <tr class="form-group">
                            <td>
                                3
                            </td>

                            <td>
                                <textarea name="row[1][description]"  class="form-control"></textarea>

                            </td>
                            <td><input type="text" name="row[1][serial]"   data-role="tagsinput"></td>
                            <td>
                                <input type="number" name="row[1][Qty]" class="form-control" value="1" id="quantity3">

                            </td>
                            <td>
                                <input type="number" name="row[1][unitprice]" class="form-control"  id="unitprice3">

                            </td>

                            <td>
                                <input type="text" name="row[1][warrenty]" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="row[1][amount]" class="form-control" value="0" id="total3">
                            </td>

                        </tr>

                        <tr class="form-group">

                            <td>
                                4
                            </td>
                            <td>
                                <textarea name="row[1][description]"  class="form-control"></textarea>
                            </td>
                            <td><input type="text" name="row[1][serial]"   data-role="tagsinput" ></td>
                            <td>
                                <input type="number" name="row[1][Qty]"  id="quantity4" value="1" >
                            </td>
                            <td>
                                <input type="number" name="row[1][unitprice]"  id="unitprice4">
                            </td>

                            <td>
                                <input type="text" name="row[1][warrenty]" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="row[1][amount]" value="0" class="form-control"  id="total4">
                            </td>

                        </tr>


                    </table>


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
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

{{--    after select user show text area of custer information--}}
    <script>
        $(document).ready(function () {
            $('#selldropdown').change(function () {
                var token = $("meta[name='csrf-token']").attr("content");
                var customer=$(this).val();
                $.ajax({
                    url:"{{url('customerinfo')}}" + '/' +customer,
                    type:"get",
                    dataType:"html",
                    data:{"id":customer,"_token":token},
                    success:function (data) {
                         $("#customeraddress").html(data);
                    },
                    error:function (data) {
                        swal("OOpps","delete not success","error");
                    }
                })
            });
        });

    </script>

    {{--dropdown searchable--}}

{{--    <script type="text/javascript">--}}
{{--        $("#selldropdown").select2({--}}

{{--        })--}}


{{--    </script>--}}
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

@endsection()

