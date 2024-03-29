
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
            <div class="row" >
                <div class="col-md-3 ">
                    <label>Select Customer</label>

                    <select class="form-control customer"  name="customer" id="customerdropdown">
                        <option value="0">--select Customer--</option>
                        @foreach($customers as $customer)
                            <option  value="{{$customer->id}}">{{$customer->customername}} {{$customer->phone}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-md-4">
                    <label>Select Product</label>
                    <select name="product" id="product" class="form-group form-control">
                            <option value="0">--select product--</option>
                            @foreach($products as $product)
                                <option  value="{{$product->id}}">{{$product->pname}} ({{$product->quantity}})</option>
                            @endforeach
                        </select>

                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col form-control">
                            <label >Date</label><br>
                            <input type="date" value="<?php echo date("Y-m-d"); ?>" name="selldate" id="sellsdate">
                        </div>
                        <div class="col form-control">
                            <label>Sells No</label>
                            <input type="text" name="sellsno" value="{{$invoices}}" id="sellsno">
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
                    {{--<input type="submit" class="form-control btn btn-default" value="Add" id="addproduct">--}}
                    <div class="row"><div class="col"><button class="form-control btn btn-default" id="addproduct" onclick="withoutvalue();">ADD</button></div></div>
                </div>

            </div>
            <br>
            <div class="row">
                <table class="table table-bordered data_table" id="datatable">
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

                    </tbody>
                </table>
            </div>


            <div >
                <div class="pull-right" style="padding-right: 35px;" >
                    <label>Total Amount:</label>
                    <label class="totalamount"></label>
                    <input type="hidden" name="totalamount" id="totalamount" >
                </div>
                <br>

            </div>


            <div class="card-footer">
{{--                                <a href="{{route('test')}}"  class="btn btn-success btn-block sellsbutton" >Sells</a>--}}
                <button class="btn btn-success btn-block" id="sellsallproduct">Sells</button>
            </div>
        </form>

    </div>


    <script>
        $(document).ready(function () {

            // total value of quantity an d unitprice
            $('div').delegate('#quantity,#unitprice','keyup',function () {
                var unirprice=$("#unitprice").val();
                var quantity=$("#quantity").val();
                var total=unirprice*quantity;
                console.log(total);
                 $('#totalprice').val(total)
                 // totalamount();
            });
            //  function totalamount() {
            //      var total = 0;
            //      $('.data_table tbody tr').each(function (row,tr) {
            //          var totalamount=$(tr).find('td:eq(14)').text();
            //           total+=totalamount;
            //      });
            //
            //
            //
            //  }
            // // console.log("total amount="+total);
                // $('.totalamount').html(total);
                // document.getElementById("totalamount").value=total;

            // append product in data table

            $('#addproduct').click(function (p) {
                p.preventDefault();
                 var customer=$('#customerdropdown').val();
                // var sellsno=$('#sellsno').val();
                var productid=$('#product').val();
                // var selldate=$('#sellsdate').val();
                var productname=$('#productname').val();
                var description=$('#description').val();
                var serial=$('#serial').val();
                var quantity=$('#quantity').val();
                var warrenty=$('#warrenty').val();
                var unitprice=$('#unitprice').val();
                var totalprice=$('#totalprice').val();
                 // start validation
                if (customer=="0"){
                    alert("please select customer")
                }
                else if (productid=="0" ){
                    alert("please select product");
                }
                else if (productname=="" ){
                    alert("please input product name");
                }
                else if (warrenty=="" ){
                    alert("please input warrenty");
                }
                else if (unitprice=="" ){
                    alert("please input product unit price");
                }
                 else if (serial==""){
                     alert("please fill up the serial field");
                }
                else if (quantity==""){
                    alert("please fill up the quantity field");
                }
                // end validation
                else
                $('.data_table tbody:last-child').append(
                    '<tr>'+
                    '<td style="display:none;"><input type="hidden" name="productid[]" value="'+productid+'" ></td>'+
                    '<td style="display:none;"><input type="hidden" name="pname[]" value="'+productname+'" ></td>'+
                    '<td style="display:none;"><input type="hidden" name="pdesc[]" value="'+description+'" ></td>'+
                    '<td style="display:none;"><input type="hidden" name="pserial[]" value="'+serial+'" ></td>'+
                    '<td style="display:none;"><input type="hidden" name="pquantity[]" value="'+quantity+'" ></td>'+
                    '<td style="display:none;"><input type="hidden" name="pwarrenty[]" value="'+warrenty+'" ></td>'+
                    '<td style="display:none;"><input type="hidden" name="punitprice[]" value="'+unitprice+'" ></td>'+
                    '<td style="display:none;"><input type="hidden" name="ptotalprice[]" value="'+totalprice+'" ></td>'+
                    '<td>'+productname+'</td>'+
                    '<td>'+description+'</td>'+
                    '<td>'+serial+'</td>'+
                    '<td>'+unitprice+'</td>'+
                    '<td>'+quantity+'</td>'+
                    '<td>'+warrenty+'</td>'+
                    '<td>'+totalprice+'</td>'+
                    '</tr>'
                );

                totalamount();

                // reseat after add product
               $('#productname').val("");
               $('#description').val("");
               $('#serial').val("");
               $('#quantity').val("");
               $('#warrenty').val("");
               $('#unitprice').val("");
               $('#totalprice').val("");



            });

            // add total amount calculation

            function totalamount() {
                     var total = 0;
                     $('.data_table tbody tr').each(function (row,tr) {
                         var totalamount=$(tr).find('td:eq(14)').text()-0;
                          total+=totalamount;
                     });
                $('.totalamount').html(total);
                document.getElementById("totalamount").value=total;


                 }




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

            // submit all data in database


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
             var total;
            var amount= $('.total').val();
                // var amount=$(this).val()-0;
                total +=amount;

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

        function addbuttonfunction(){
            // var prouct=$('#product').val();
            // var customer=$('#customerdropdown').val();
            $('#addproduct').val("hello");

        }

    </script>


@endsection()