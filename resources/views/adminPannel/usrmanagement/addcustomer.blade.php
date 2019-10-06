@extends('adminPannel.master')
@section('title')
    Add Customer
    @endsection()

@section('body')
<div class="card card-primary container">
    <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
        <h2 class="card-title">Add customer</h2>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" class="form-control" id="insertcustomer" action="{{route('insertcustomer')}}" method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col">
                <label>Customer Name</label>
                <input type="text" class="form-control"  name="customername">
            </div>
            <div class="col">
                <label>Company Name</label>
                <input type="text" class="form-control"  name="customercompany">
            </div>
            <div class="col">
                <label>Customer Email</label>
                <input type="email" class="form-control"  name="customeremail">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label>Customer Contact</label>
                <input type="number" class="form-control"  name="customercontact">
            </div>
            <div class="col">
                <label>Customer Alt.Contact</label>
                <input type="number" class="form-control"  name="customeraltcontact">
            </div>
            <div class="col">
                <label>Customer Phone</label>
                <input type="number" class="form-control"  name="phone">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label>Customer Alt.Phone</label>
                <input type="number" class="form-control"  name="phone1">
            </div>
            <div class="col">
                <label>Customer Address </label>
                <textarea class="form-control"  name="customeraddress"></textarea>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <label>Image</label>
                <input type="file" class="form-control" name="profileimage">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
    </form>
</div>
    <script>
        $(function () {
            $("#insertcustomer").on("submit",function (e) {
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
                            document.getElementById("insertcustomer").reset();
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
