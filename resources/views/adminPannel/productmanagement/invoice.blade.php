@extends('adminPannel.master')
@section('title')
   Invoice
@endsection

@section('body')

<div class="row" >
    <div class="col-12">


        <!-- Main content -->
        <div class="invoice p-3 mb-3">
            <div class="row header">
                <div class="col-12" style="text-align: center">
                    <h4>Spybee Network</h4>
                    <h6>House:1173(6th floor),Avenue:11,Road:12B,Mirpur DOHS,Dhaka-1216</h6>
                    <h6>01758845299</h6>
                    <h6>spybeenetwork@sypbee.net</h6>
                </div>

            </div>
            <hr>
            <!-- title row -->

            <!-- info row -->
            <div class="row invoice-info" >
                <div class="col-sm-8 invoice-col">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Invoice No:</label><br>
                            <label>Customer Name:</label><br>
                            <label>Address:</label><br>
                            <label>Mobile:</label><br>


                        </div>
                        <div class="col-md-9">
                            <label>#AMS{{$products->sellsno}}</label><br>
                            <label>{{$customer->customername}}</label><br>
                            <label>{{$customer->customeraddress}}</label><br>
                            <label>{{$customer->phone}}</label><br>
                        </div>
                    </div>



                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <div class="row">
                        <div class="col-md-5">
                            <label>Sold By:</label><br>
                            <label>Date:</label><br>
                            <label>Ref No:</label><br>



                        </div>
                        <div class="col-md-7">
                            <label>{{Auth::user()->name}}</label><br>
                            <label>{{$products->selldate}}</label><br>
                            <label></label><br>

                        </div>
                    </div>
                </div>
                <!-- /.col -->

                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive ">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Product</th>
                            <th>Desc</th>
                            <th>Serial#</th>
                            <th>Qty</th>
                            <th>Unit price</th>
                            <th>Warrenty</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($products->pserial as $key=>$product)


                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$products->pname[$key]}}</td>
                            <td>{{$products->pdesc[$key]}}</td>
                            <td>{{$products->pserial[$key]}}</td>
                            <td>{{$products->pquantity[$key]}}</td>
                            <td>{{$products->punitprice[$key]}}</td>
                            <td>{{$products->pwarrenty[$key]}}</td>
                            <td>{{$products->ptotalprice[$key]}}</td>

                        </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">

                </div>
                <!-- /.col -->
                <div class="col-6">


                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody><tr>
                            <th style="width:50%">Subtotal:</th>
                                <td>{{$products->totalamount}}</td>
                            </tr>
                            <tr>
                                <th>Add vat</th>
                                <td>0.00</td>
                            </tr>
                            <tr>
                                <th>Installation/Service Charge</th>
                                <td>0.00</td>
                            </tr>
                            <tr style="border-top:3px solid #212529;">
                                <th >Net Payable Amount</th>
                                <td>{{$products->totalamount}}</td>
                            </tr>

                            </tbody></table>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-12">
                    <a href="" target="_blank"  onclick="pri()" class="btn btn-default float-right"><i class="fa fa-print"></i> Print</a>
{{--                    <button type="button" class="btn btn-success float-right"><i class="fa fa-credit-card"></i> Submit--}}
{{--                        Payment--}}
{{--                    </button>--}}
{{--                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">--}}
{{--                        <i class="fa fa-download"></i> Generate PDF--}}
{{--                    </button>--}}
                </div>
            </div>
        </div>
        <!-- /.invoice -->
    </div><!-- /.col -->
</div>
    <script>
        function pri(){
            window.print();
        }

    </script>

@endsection