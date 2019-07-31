@extends('adminPannel.master')
@section('title')
   Invoice
@endsection

@section('body')

<div class="row">
    <div class="col-12">


        <!-- Main content -->
        <div class="invoice p-3 mb-3">
            <div class="row header">
                <div class="col-12" style="text-align: center">
                    <h3>Spybee Network</h3>
                    <h5>shop-412,LEVEL-4,MULTIPLANCENTER,NEW ELEPHENT ROAD,DHAKA</h5>
                    <h5>01758845299</h5>
                    <h5>spybeenetwork@sypbee.net</h5>
                </div>

            </div>
            <hr>
            <!-- title row -->

            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-8 invoice-col">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Invoice No:</label><br>
                            <label>Customer Name:</label><br>
                            <label>Address:</label><br>
                            <label>Mobile:</label><br>


                        </div>
                        <div class="col-md-9">
                            <label>#A000SDRE</label><br>
                            <label>SPYBEE NETWORK</label><br>
                            <label>HOUSE:1173,6FL,AVENEUE 11,MIRPUR DOHS</label><br>
                            <label>01817974339</label><br>
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
                            <label>prince</label><br>
                            <label>31/07/2019</label><br>
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
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Desc</th>
                            <th>Serial#</th>
                            <th>Qty</th>
                            <th>Unit price</th>
                            <th>Warrenty</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Hard disk sata toshiba 1 tb</td>
                            <td>766x588FREDS56</td>
                            <td>1</td>
                            <td>3700</td>
                            <td>1 YEAR</td>
                            <td>3700</td>

                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Hard disk sata toshiba 1 tb</td>
                            <td>766x588FREDS56</td>
                            <td>1</td>
                            <td>3700</td>
                            <td>1 YEAR</td>
                            <td>3700</td>

                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Hard disk sata toshiba 1 tb</td>
                            <td>766x588FREDS56</td>
                            <td>1</td>
                            <td>3700</td>
                            <td>1 YEAR</td>
                            <td>3700</td>

                        </tr>

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
                        <table class="table">
                            <tbody><tr>
                            <th style="width:50%">Subtotal:</th>
                                <td>3700TK</td>
                            </tr>
                            <tr>
                                <th>Add vat</th>
                                <td>0.00</td>
                            </tr>
                            <tr>
                                <th>Installation/Service Charge</th>
                                <td>0.00</td>
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
                    <a href="invoice.blade.php" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                    <button type="button" class="btn btn-success float-right"><i class="fa fa-credit-card"></i> Submit
                        Payment
                    </button>
                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                        <i class="fa fa-download"></i> Generate PDF
                    </button>
                </div>
            </div>
        </div>
        <!-- /.invoice -->
    </div><!-- /.col -->
</div>

@endsection