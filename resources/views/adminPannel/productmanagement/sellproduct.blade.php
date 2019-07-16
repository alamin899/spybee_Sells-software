
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
{{--    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>--}}

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


@endsection()

