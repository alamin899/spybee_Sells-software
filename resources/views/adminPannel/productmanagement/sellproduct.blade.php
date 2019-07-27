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
                            <textarea class="form-control" >

                            </textarea>
                        </div>

                    </div>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-3"></div>

            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-responsive table-striped " id="crud_table">
                        <tr>
                            <th width="10%">Sl</th>
                            <th width="10%">Item</th>
                            <th width="15%">Descriptio</th>
                            <th width="20%">Serial No</th>
                            <th width="10%">Quantity</th>
                            <th width="10%">Unit Price</th>
                            <th width="10%">Warrenty</th>
                            <th width="10%">Amount</th>
                            <th width="5%"></th>
                        </tr>
                        <tr>
                            <td width="10%">1</td>
                            <td width="10%"><textarea name="row[0][item]"></textarea></td>
                            <td width="15%"><textarea name="row[0][description]"></textarea></td>
                            <td width="20%"><input type="text" name="row[0][serial]"></td>
                            <td width="10%"><input type="number" name="row[0][quantity]"></td>
                            <td width="10%"><input type="number" name="row[0][unitprice]"></td>
                            <td width="10%"><input type="number" name="row[0][warrenty]"></td>
                            <td width="10%"><input type="number" name="row[0][amount]"></td>
                            <td width="5%"></td>
                        </tr>
                    </table>
                    <div align="right">
                        <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
                    </div>
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

    <script>
        $(document).ready(function () {
            var count = 0;
            $('#add').click(function(){
                count = count + 1;
                var html_code = "<tr id='row"+count+"'>";
                html_code +="<td>"+count+"</td>";
                html_code += "<td><textarea name='row["+count+"][item]'></textarea></td>";
                html_code += "<td><textarea name='row["+count+"][description]'></textarea></td>";
            // <input type='text' name='row["+count+"][serial]' data-role='tagsinput'>
                html_code += "<td><input type='text' name='row["+count+"][serial]' data-role='tagsinput'></td>";
                html_code += "<td><input type='number' name='row["+count+"][quantity]'></td>";
                html_code += "<td><input type='number' name='row["+count+"][unitprice]'></td>";
                html_code += "<td><input type='number' name='row["+count+"][warrenty]'></td>";
                html_code += "<td><input type='number' name='row["+count+"][amount]'></td>";
                html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";
                html_code += "</tr>";
                $('#crud_table').append(html_code);
            });

            $(document).on('click', '.remove', function(){
                var delete_row = $(this).data("row");
                $('#' + delete_row).remove();
            });
        });
    </script>

    {{--dropdown searchable--}}

{{--    <script type="text/javascript">--}}
{{--        $("#selldropdown").select2({--}}

{{--        })--}}


{{--    </script>--}}


@endsection()

