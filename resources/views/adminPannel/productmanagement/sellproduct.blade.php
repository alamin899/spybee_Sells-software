
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

        {{--testing--}}
        <form role="form" action="{{route('sellsproduct')}}" method="post" class="form-control">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-3 ">

                    <select class="form-control customer"  name="customer" id="customerdropdown">
                        <option value="0">--select Customer--</option>
                        @foreach($customers as $customer)
                            <option  value="{{$customer->id}}">{{$customer->customername}} {{$customer->phone}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-md-4">
                    <select name="product" id="product" class="form-group form-control">
                            <option>--select product--</option>
                            @foreach($products as $product)
                                <option  value="{{$product->id}}">{{$product->pname}}</option>
                            @endforeach
                        </select>

                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col form-control">
                            <label >Date</label><br>
                            <input type="date" value="<?php echo date("Y-m-d"); ?>" name="selldate">
                        </div>
                        <div class="col form-control">
                            <label>Sells No</label>
                            <input type="text" name="sellsno" value="{{$invoices}}">
                        </div>
                    </div>

                </div>

            </div>
            <hr>

            <div class="form-row" id="customeraddress">


            </div>
            <div class="row">
                <div class="col-md-11">
                    <div class="row" id="productlist">

                    </div>
                </div>
                <div class="col-md-1">
                    <div class="row"><div class="col"><input type="" class="form-control btn btn-default" value="Add" id="addproduct"></div></div>
                </div>

            </div>
            <br>
            <div class="row">
                <table class="table table-bordered data_table">
                    <thead>
                    <tr>
                        <th>product</th>
                        <th>description</th>
                        <th>serial no</th>
                        <th>unitprice</th>
                        <th>quantity</th>
                        <th>warrenty</th>
                        <th>total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr></tr>
                    </tbody>
                </table>
            </div>


            <div >
                <div class="pull-right" style="padding-right: 35px;" >
                    <label>Total Amount:</label>
                    <label class="totalamount"></label>
                    <input type="hidden" name="totalamount" id="totalamount">
                </div>
                <br>

            </div>


            <div class="card-footer">
                {{--                <a href="{{route('test')}}"  class="btn btn-success btn-block sellsbutton" >Sells</a>--}}
                <button class="btn btn-success btn-block">Sells</button>
            </div>
        </form>
    </div>


    <script>
        $(document).ready(function () {
            $('div').delegate('#quantity,#unitprice','keyup',function () {
                var unirprice=$("#unitprice").val();
                var quantity=$("#quantity").val();
                var total=unirprice*quantity;
                console.log(total);
                $('#totalprice').val(total)
            });
            $('#addproduct').click(function () {
                var productname=$('#productname').val();
                var description=$('#description').val();
                var serial=$('#serial').val();
                var quantity=$('#quantity').val();
                var warrenty=$('#warrenty').val();
                var unitprice=$('#unitprice').val();
                var totalprice=$('#totalprice').val();
                $('.data_table tbody:last-child').append(
                    '<tr>'+
                    '<td>'+productname+'</td>'+
                    '<td>'+description+'</td>'+
                    '<td>'+serial+'</td>'+
                    '<td>'+unitprice+'</td>'+
                    '<td>'+warrenty+'</td>'+
                    '<td>'+warrenty+'</td>'+

                    '<td>'+totalprice+'</td>'+
                    '</tr>'
                );

            });
            // product dropdown
            $('#product').change(function () {
                var token = $("meta[name='csrf-token']").attr("content");
                var product=$(this).val();
                $.ajax({
                    url:"{{url('productdropdown')}}" + '/' +product,
                    type:"get",
                    dataType:"html",
                    data:{"id":product,"_token":token},
                    success:function (data) {
                        $("#productlist").html(data);
                    },
                    error:function (data) {
                        swal("OOpps","no something is wrong","error");
                    }
                })
            });

        });
    </script>

    {{--    calculation of unit price and quantity and finally show total total amount--}}
    <script type="text/javascript">
        $('.tbody').delegate('.quantity,.total,.unitprice','keyup',function () {
            var tr=$(this).parent().parent();
            var quantity=tr.find('.quantity').val();
            var unitprice=tr.find('.unitprice').val();
            var amount=quantity*unitprice;
            tr.find('.total').val(amount);
            totalamount();
        });
        function totalamount() {
            var total=0;
            $('.total').each(function () {
                var amount=$(this).val()-0;
                total +=amount;
            })
            $('.totalamount').html(total);
            document.getElementById("totalamount").value=total;
        }
    </script>

    <script>
        $(document).ready(function () {
            $('#customerdropdown').change(function () {
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

    {{--    dropdown searchable--}}

    <script type="text/javascript">
        $(document).ready(function () {
            $("#customerdropdown").select2();
        });
        $(document).ready(function () {
            $("#product").select2();
        });
    </script>
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>--}}
    {{--    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>--}}
    {{--    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>--}}

@endsection()