
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
                <div class="col"><select name="product" id="product" class="form-group form-control">
                        <option>--select product--</option>
                        @foreach($products as $product)
                            <option  value="{{$product->pname}}">{{$product->pname}}</option>
                        @endforeach
                    </select></div>
                <div class="col"><textarea type="text" id="description" name="description" class="form-control" placeholder="description" rows="1"></textarea></div>
                <div class="col"><textarea type="text" id="serial" name="serial" class="form-control" placeholder="serial" rows="1"></textarea></div>
                <div class="col"><input type="text"    id="quantity" name="quantity"  class="form-control" placeholder="quantity"></div>
                <div class="col"><input type="text"    id="warrenty" name="warrenty" class="form-control" placeholder="warrenty"></div>
                <div class="col"><input type="text"    id="unitprice" name="unitprice"  class="form-control" placeholder="unit price"></div>
                <div class="col"><input type="text"    id="totalprice" name="totalprice"  class="form-control" placeholder="totalprice" ></div>
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
                var productname=$('#product').val();
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