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
        <form role="form" action="{{route('sellsproduct')}}" method="post" class="form-control">
            {{csrf_field()}}
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
                            <input type="text" name="sellsno" value="{{$invoices}}">
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
{{--    sells table        https://paste.ubuntu.com/p/s8YRhxRz3W/--}}


            <div class="container tbody table table-bordered table-striped">
                <div class="row col-md-12 ">
                    <div class="col-md-1"><label>SL</label></div>
                    <div class="col-md-3"><label>Desc.</label></div>
                    <div class="col-md-3"><label>Serial</label></div>
                    <div class="col-md-1"><label>Qty</label></div>
                    <div class="col-md-1"><label>Unit Price</label></div>
                    <div class="col-md-2"><label>Warrenty</label></div>
                    <div class="col-md-1"><label>Amount</label></div>
                </div>
                <div>

                    <div class="row col-md-12 ">
                        <div class="col-md-1">1</div>
                        <div class="col-md-3"><textarea name="row[0][description]"  class="form-control"></textarea></div>
                        <div class="col-md-3"><input type="text" name="row[0][serial]"   data-role="tagsinput" ></div>
                        <div class="col-md-1"><input type="number" name="row[0][Qty]"  class="quantity form-control" value="1" ></div>
                        <div class="col-md-1"><input type="text" name="row[0][unitprice]"  class="form-control unitprice"></div>
                        <div class="col-md-2"> <input type="text" name="row[0][warrenty]" class="form-control"></div>
                        <div class="col-md-1"> <input type="text" name="row[0][amount]"  class="form-control total" ></div>
                    </div>
                    <hr>

                    <div class="row col-md-12">
                        <div class="col-md-1">2</div>
                        <div class="col-md-3"><textarea name="row[1][description]"  class="form-control"></textarea></div>
                        <div class="col-md-3"><input type="text" name="row[1][serial]"   data-role="tagsinput" ></div>
                        <div class="col-md-1"><input type="number" name="row[1][Qty]"  class="quantity form-control" value="1" ></div>
                        <div class="col-md-1"><input type="text" name="row[1][unitprice]"  class="form-control unitprice"></div>
                        <div class="col-md-2"> <input type="text" name="row[1][warrenty]" class="form-control"></div>
                        <div class="col-md-1"> <input type="text" name="row[1][amount]"  class="form-control total" ></div>
                    </div>

                    <hr>

                    <div class="row col-md-12">
                        <div class="col-md-1">3</div>
                        <div class="col-md-3"><textarea name="row[2][description]"  class="form-control"></textarea></div>
                        <div class="col-md-3"><input type="text" name="row[2][serial]"   data-role="tagsinput" ></div>
                        <div class="col-md-1"><input type="number" name="row[2][Qty]"  class="quantity form-control" value="1" ></div>
                        <div class="col-md-1"><input type="text" name="row[2][unitprice]"  class="form-control unitprice"></div>
                        <div class="col-md-2"> <input type="text" name="row[2][warrenty]" class="form-control"></div>
                        <div class="col-md-1"> <input type="text" name="row[2][amount]"  class="form-control total" ></div>
                    </div>

                    <hr>

                    <div class="row col-md-12">
                        <div class="col-md-1">4</div>
                        <div class="col-md-3"><textarea name="row[3][description]"  class="form-control"></textarea></div>
                        <div class="col-md-3"><input type="text" name="row[3][serial]"   data-role="tagsinput" ></div>
                        <div class="col-md-1"><input type="number" name="row[3][Qty]"  class="quantity form-control" value="1" ></div>
                        <div class="col-md-1"><input type="text" name="row[3][unitprice]"  class="form-control unitprice"></div>
                        <div class="col-md-2"> <input type="text" name="row[3][warrenty]" class="form-control"></div>
                        <div class="col-md-1"> <input type="text" name="row[3][amount]"  class="form-control total" ></div>
                    </div>
                </div>
            </div>

            <div >
{{--                <div class="col-md-10"></div>--}}
{{--                <div class="col-md-3">--}}
                <div class="pull-right" style="padding-right: 35px;">
                    <label>Total Amount:</label>
                    <label class="totalamount"></label>
                </div>
                <br>

{{--                </div>--}}
            </div>





            <!-- /.card-body -->

            <div class="card-footer">
{{--                <a href="{{route('test')}}"  class="btn btn-success btn-block sellsbutton" >Sells</a>--}}
                <button class="btn btn-success btn-block">Sells</button>
            </div>
        </form>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


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

}
{{--$(".sellsbutton").on('click',function (e) {--}}
{{--    e.preventDefault();--}}
{{--    var token = $("meta[name='csrf-token']").attr("content");--}}
{{--    $.ajax({--}}
{{--        action:"{{route('test')}}",--}}
{{--        method:"post",--}}
{{--        data:{_token: token},--}}
{{--        --}}
{{--    })--}}
{{--})--}}



</script>
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

