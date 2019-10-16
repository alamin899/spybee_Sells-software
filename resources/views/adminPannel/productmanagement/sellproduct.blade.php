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
        <form role="form" action="{{route('sellsproduct')}}" method="post" class="form-control">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-2 form-control">
                    <label>Customer</label>
                    <select class="form-control customer"  name="customer" id="selldropdown">
                        <option value="0">--select--</option>
                        @foreach($customers as $customer)
                            <option  value="{{$customer->id}}">{{$customer->customername}} {{$customer->phone}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-md-5">
                    <select name="product" id="product" class="form-group form-control">
                        <option>--select product--</option>
                        <option value="">product1</option>
                        <option value="">product1</option>
                        <option value="">product1</option>
                        <option value="">product1</option>
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
            {{--            <div class="row">--}}
            {{--                <div class="col-md-3">--}}
            {{--                    <div class="card card-primary">--}}
            {{--                        <div class="card-header" style="background: #191b19;">--}}
            {{--                            <h2 class="card-title">Customer Address</h2>--}}
            {{--                        </div>--}}
            {{--                        <div id="customeraddress">--}}
            {{--                            <textarea class="form-control"  >--}}

            {{--                            </textarea>--}}
            {{--                        </div>--}}

            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-md-6"></div>--}}
            {{--                <div class="col-md-3"></div>--}}

            {{--            </div>--}}

            <div class="form-row" id="customeraddress">


            </div>
            <div class="row">
                <div class="col"><input type="text" name="productname" id="productname" class="form-control" placeholder="Product"></div>
                <div class="col"><textarea type="text" id="description" name="description" class="form-control" placeholder="description" rows="1"></textarea></div>
                <div class="col"><textarea type="text" id="serial" name="serial" class="form-control" placeholder="serial" rows="1"></textarea></div>
                <div class="col"><input type="text"    id="quantity" name="quantity"  class="form-control" placeholder="quantity"></div>
                <div class="col"><input type="text"    id="warrenty" name="warrenty" class="form-control" placeholder="warrenty"></div>
                <div class="col"><input type="text"    id="unitprice" name="unitprice"  class="form-control" placeholder="unit price"></div>
                <div class="col"><input type="text"    id="totalprice" name="totalprice"  class="form-control" ></div>
                <div class="col"><input type="" class="form-control btn btn-default" value="Add" id="addproduct"></div>
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


            {{--    sells table        https://paste.ubuntu.com/p/s8YRhxRz3W/--}}


            {{--<div class="container tbody table table-bordered table-striped">--}}
                {{--<div class="row col-md-12 ">--}}
                    {{--                    <div class="col-md-1"><label>SL</label></div>--}}
                    {{--<div class="col-md-2"><label>Product</label></div>--}}
                    {{--<div class="col-md-2"><label>Desc.</label></div>--}}
                    {{--<div class="col-md-2"><label>Serial</label></div>--}}
                    {{--<div class="col-md-1"><label>Qty</label></div>--}}
                    {{--<div class="col-md-1"><label>Unit Price</label></div>--}}
                    {{--<div class="col-md-2"><label>Warrenty</label></div>--}}
                    {{--<div class="col-md-1"><label>Amount</label></div>--}}
                    {{--<div class="col-md-1" style="padding-top: 8px;"> <a class=" btn btn-success  addrow"><i class="fa fa-plus"></i></a></div>--}}
                {{--</div>--}}
                {{--<div>--}}

                    {{--<div class="row col-md-12 ">--}}
                        {{--                        <div class="col-md-1">1</div>--}}
                        {{--<div class="col-md-2">--}}
                            {{--<select class="form-control" id="product">--}}
                                {{--<option>select Product</option>--}}
                                {{--<option>product1</option>--}}
                                {{--<option>product2</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2"><textarea name="description[]"  class="form-control" rows="1"></textarea></div>--}}
                        {{--<div class="col-md-2"><textarea name="serial[]" class="form-control" rows="1"></textarea></div>  --}}{{--data-role="tagsinput"--}}
                        {{--<div class="col-md-1"><input type="text" name="qty[]"  class="quantity form-control" value="1" ></div>--}}
                        {{--<div class="col-md-1"><input type="text" name="unitprice[]"  class="form-control unitprice"></div>--}}
                        {{--<div class="col-md-2"> <input type="text" name="warrenty[]" class="form-control"></div>--}}
                        {{--<div class="col-md-1"> <input type="text" name="amount[]"  class="form-control total" ></div>--}}
                        {{--<div class="col-md-1"></div>--}}
                    {{--</div>--}}

                    {{--<br>--}}

                {{--</div>--}}



            {{--</div>--}}

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
    $('div').delegate('#quantity','keyup',function () {
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
                '<td>'+quantity+'</td>'+
                '<td>'+warrenty+'</td>'+
                '<td>'+unitprice+'</td>'+
                '<td>'+totalprice+'</td>'+
                '</tr>'

        );


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
    {{--  End  calculation of unit price and quantity and finally show total total amount--}}


    {{--add multiple row--}}
    {{--<script>--}}
        {{--var count=1;--}}
        {{--$('.addrow').on('click',function () {--}}

            {{--addrow();--}}
        {{--});--}}
        {{--function addrow() {--}}
            {{--count++;--}}

            {{--var row='<div class="row col-md-12 ">' +--}}
                {{--// '<div class="col-md-1">'+count+'</div>' +--}}
                {{--'<div class="col-md-2"><select class="form-control"><option>select Product</option><option>product1</option><option>product2</option></select></div>'+--}}
                {{--'<div class="col-md-2"><textarea name="description[]"  class="form-control" rows="1"></textarea></div>' +--}}
                {{--'<div class="col-md-2"><textarea name="serial[]" class="form-control" rows="1"></textarea></div> ' +--}}
                {{--'<div class="col-md-1"><input type="text" name="qty[]"  class="quantity form-control" value="1" ></div>' +--}}
                {{--'<div class="col-md-1"><input  type="text" name="unitprice[]"  class="form-control unitprice"></div>' +--}}
                {{--'<div class="col-md-2"> <input type="text" name="warrenty[]" class="form-control"></div>' +--}}
                {{--'<div class="col-md-1"> <input type="text" name="amount[]"  class="form-control total" ></div>' +--}}
                {{--'<div class="col-md-1"><input type="button" class="name btn btn-danger" value="-"> </div>' +--}}

                {{--'</div>'+--}}
                {{--'<hr>';--}}


            {{--$('.tbody').append(row);--}}
            {{--// remove row--}}
            {{--$('.name').on('click',function () {--}}
                {{--$(this).parent().parent().remove();--}}
                {{--count--;--}}
                {{--totalamount();--}}
            {{--})--}}

        {{--};--}}


    {{--</script>--}}

    {{--End add multiple row--}}


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

    {{--    dropdown searchable--}}

    <script type="text/javascript">
        $(document).ready(function () {
            $("#selldropdown").select2();
        });
        $(document).ready(function () {
            $("#product").select2();
        });


    </script>
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>--}}
    {{--    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>--}}
    {{--    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>--}}

@endsection()

