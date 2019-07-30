@extends('adminPannel.master')
@section('title')
    Sells product
@endsection()

@section('body')
    <style>
        #dynamic {
            display: block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
    </style>
{{--    tag input--}}

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
                            <textarea class="form-control">

                            </textarea>
                        </div>

                    </div>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-3"></div>

            </div>
            <hr>
            <div class="row">
                    <table class="table table-bordered table-responsive table-striped form-control" id="crud_table" >
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Des.</th>
                            <th>serial</th>
                            <th>Qty</th>
                            <th>Unit Price</th>
                            <th>Warrenty</th>
                            <th>Amount</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="form-group">
                            <td>
                                1
                            </td>
                            <td>
                             <textarea name="row[0][description]"  class="form-control"></textarea>
                            </td>
                            <td><input type="text" name="row[0][serial]" id="dynamic" data-role="tagsinput" ></td>
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
                                <input type="number" name="row[0][amount]" class="form-control" value="0" id="total1">
                            </td>
                            <td></td>
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
                                <input type="number" name="row[1][amount]" class="form-control" value="0" id="total2">
                            </td>
                            <td></td>
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
                                <input type="number" name="row[1][amount]" class="form-control" value="0" id="total3">
                            </td>
                            <td></td>
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
                                <input type="number" name="row[1][amount]" value="0"  id="total4">
                            </td>
                            <td></td>
                        </tr>
                        </tbody>

                    </table>
            </div>
{{--                <div align="right">--}}
{{--                    <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>--}}
{{--                </div>--}}
            


{{--                <div class="col-md-10"></div>--}}
{{--                <div class="col-md-3">--}}
                <div class="pull-right" style="padding-right: 35px;">
                    <label>Total Amount:</label>
                    <label><input type="text" id="allamount"></label>
                </div>


{{--                </div>--}}

{{--    </div>--}}




            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success btn-block">Sells Product</button>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function () {
            $('#quantity1,#unitprice1').blur(function () {
                var qty=parseInt(document.getElementById("quantity1").value);
                var unprice=parseInt(document.getElementById("unitprice1").value);
                var total=qty*unprice;
                document.getElementById("total1").value=total;
            });

            $('#quantity2,#unitprice2').blur(function () {
                var qty=parseInt(document.getElementById("quantity2").value);
                var unprice=parseInt(document.getElementById("unitprice2").value);
                var total=qty*unprice;
                document.getElementById("total2").value=total;
            })

            $('#quantity3,#unitprice3').blur(function () {
                var qty=parseInt(document.getElementById("quantity3").value);
                var unprice=parseInt(document.getElementById("unitprice3").value);
                var total=qty*unprice;
                document.getElementById("total3").value=total;
            })

            $('#quantity4,#unitprice4').blur(function () {
                var qty=parseInt(document.getElementById("quantity4").value);
                var unprice=parseInt(document.getElementById("unitprice4").value);
                var total=qty*unprice;
                document.getElementById("total4").value=total;
            })

            $('#quantity4,#unitprice4,#quantity3,#unitprice3,#quantity2,#unitprice2,#quantity1,#unitprice1').change(function () {
                var amount1=parseInt(document.getElementById("total1").value);
                var amount2=parseInt(document.getElementById("total2").value);
                var amount3=parseInt(document.getElementById("total3").value);
                var amount4=parseInt(document.getElementById("total4").value);
                var total=amount1+amount2+amount3+amount4;
                console.log(total);
                 document.getElementById("allamount").value=total;
            })

        })
    </script>
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

                    }
                })
            });
        });

    </script>

{{--    dynamic field --}}
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            var count = 0;--}}
{{--            var sl=1;--}}
{{--            $('#add').click(function () {--}}
{{--                count = count + 1;--}}
{{--                sl+=1;--}}

{{--                var html_code = "<tr id='row" + count + "'>";--}}
{{--                html_code +="<td>"+sl+"</td>";--}}
{{--                html_code +="<td> <textarea name='row["+count+"][description]'></textarea></td>";--}}
{{--                html_code += "<td><input type='number' name='row["+count+"][Qty]'></td>";--}}
{{--                html_code += "<td><input type='number' name='row["+count+"][unitprice]'></td>";--}}
{{--                html_code += "<td><input type='number' name='row["+count+"][warrenty]'></td>";--}}
{{--                html_code += "<td><input type='number' name='row["+count+"][amount]'></td>";--}}

{{--                html_code += "<td><button type='button' name='remove' data-row='row" + count + "' class='btn btn-danger btn-xs remove'>-</button></td>";--}}
{{--                html_code += "</tr>";--}}
{{--                $('#crud_table').append(html_code);--}}
{{--            });--}}

{{--            $(document).on('click', '.remove', function () {--}}
{{--                var delete_row = $(this).data("row");--}}
{{--                $('#' + delete_row).remove();--}}
{{--                sl=sl-1;--}}
{{--            });--}}
{{--        });--}}


{{--    </script>--}}

{{--        </script>--}}
    {{--dropdown searchable--}}

{{--    <script type="text/javascript">--}}
{{--        $("#selldropdown").select2({--}}

{{--        })--}}


{{--    </script>--}}

<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
@endsection()

