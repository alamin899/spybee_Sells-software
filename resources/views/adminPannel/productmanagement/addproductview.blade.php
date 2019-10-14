@extends('adminPannel.master')
@section('title')
    Add product
@endsection()

@section('body')
    <div class="card card-primary container">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">Add Product</h2>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" class="form-control" id="productadd" action="{{route('addproduct')}}" method="post">
           {{csrf_field()}}
            <div class="row">
                <div class="col">
                    <label>Product Dislplay Name</label>
                    <input type="text" class="form-control"  name="pdisplayname">
                </div>
                <div class="col">
                    <label>Product Name</label>
                    <input type="text" class="form-control"  name="pname">
                </div>
                <div class="col">
                    <label>Serial No</label>
                    <input type="number" class="form-control"  name="pserialno">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Product Brand</label>
                    <input type="text" class="form-control"  name="pbrand">
                </div>
                <div class="col">
                    <label>Product Model</label>
                    <input type="text" class="form-control"  name="pmodel">
                </div>
                <div class="col">
                    <label>Product Warrenty</label>
                    <select name="pwarrenty" class="form-control">
                        <option value="0">Select Warrenty:</option>
                        <option value="6">6 month</option>
                        <option value="12">12 Month</option>
                        <option value="18">18 Month</option>
                        <option value="24">24 Month</option>
                        <option value="30">30 Month</option>
                        <option value="36">36 Month</option>

                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>Buying Date</label>
                    <input type="date" class="form-control" name="pbuydate">
                </div>
                <div class="col">
                    <label>Buying Price</label>
                    <input type="number" class="form-control"  name="pbuyprice">
                </div>
                <div class="col">
                    <label>Selling  Price</label>
                    <input type="number" class="form-control"  name="psellprice">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>Image</label>
                    <input type="file" class="form-control" name="profileimage">
                </div>
                <div class="col">
                    <label>Quantity</label>
                    <input type="number" class="form-control" name="quantity">
                </div>
                <div class="col">
                    <label>Vendor</label>
                    <select class="form-control" name="vendor">
                        <option value="0">--Select Vendor--</option>
                    </select>
                </div>


            </div>


            <div class="row">
                <div class="col">
                    <label>Short Description</label>
                    <textarea class="form-control" name="pshortdesc"></textarea>
                </div>
                <div class="col">
                    <label>Full Description</label>
                    <textarea class="form-control" name="pfulldesc"></textarea>
                </div>



            </div>



            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success btn-block">Add Product</button>
            </div>
        </form>
    </div>

    <script>
        $(function () {
            $("#productadd").on("submit",function (e) {
                e.preventDefault();
                var form=$(this);
                var url=form.attr("action");
                var method=form.attr("method");
                var data=form.serialize();


                $.ajax({
                    url:url,
                    data:data,
                    type:"POST",
                    dataType:"JSON",
                    success:function (data) {
                        if (data=="success"){
                            swal("Great","successfully inserted","success");
                            document.getElementById("productadd").reset();
                        }
                        else {
                            swal("OOpps","inserted not success","error");
                        }
                    },
                    error:function (error) {
                        swal("OOpps","inserted not success","error");
                    }


                })
            })
        })
    </script>
@endsection()

