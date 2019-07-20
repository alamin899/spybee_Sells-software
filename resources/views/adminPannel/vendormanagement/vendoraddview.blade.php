@extends('adminPannel.master')
@section('title')
    Add Vendor
@endsection()

@section('body')
    <div class="card card-primary container">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">Add Vendor</h2>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('vendorinsert')}}" method="post" role="form" class="form-control" id="venodradd">
            {{csrf_field()}}
            <div class="row">
                <div class="col">
                    <label>Vendor Name</label>
                    <input type="text" class="form-control"  name="vname">
                </div>
                <div class="col">
                    <label>Vendor Email</label>
                    <input type="email" class="form-control"  name="vemail">
                </div>
                <div class="col">
                    <label>Vendor Phone</label>
                    <input type="number" class="form-control"  name="vphone">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Contact Person Name</label>
                    <input type="text" class="form-control"  name="cpname">
                </div>
                <div class="col">
                    <label>Contact Person email</label>
                    <input type="email" class="form-control"  name="cpemail">
                </div>
                <div class="col">
                    <label>Contact Person mobile</label>
                    <input type="number" class="form-control"  name="cpmob1">
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label>Contact Person Alt.mobile</label>
                    <input type="number" class="form-control"  name="cpmob2">
                </div>
                <div class="col">
                    <label>Area</label>
                    <select class="form-control" value="dhaka" name="varea">
                        <option value="dhaka">--Select Vendor Area--</option>
                    </select>
                </div>

                    <div class="col">
                        <label>Company Name</label>
                        <input type="text" class="form-control" name="companyname">
                    </div>



            </div>
            <div class="row">
                <div class="col">
                    <label>Vendor Short Address</label>
                    <textarea class="form-control" name="vsaddress"></textarea>
                </div>

                <div class="col">
                    <label>Vendor Full Address</label>
                    <textarea class="form-control" name="vfaddress"></textarea>
                </div>
            </div>


            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success btn-block">Add Vendor</button>
            </div>
        </form>
    </div>

    <script>
        $(function () {
            $("#venodradd").on("submit",function (e) {
                e.preventDefault();
                var form=$(this);
                var url=form.attr("action");
                var method=form.attr("method");
                var data=form.serialize();
                console.log( url );

                $.ajax({
                    url:url,
                    data:data,
                    type:"POST",
                    dataType:"JSON",
                    success:function (data) {
                        if (data=="success"){
                            swal("Great","successfully inserted","success");
                            document.getElementById("venodradd").reset();
                        }
                        else {
                            swal("OOpps","inserted not success","error");
                        }
                    },
                    error:function (error) {
                        swal("OOpps","inserted not success error","error");
                    }


                })
            })
        })
    </script>
@endsection()

