
@extends('adminPannel.master')
@section('title')
    Vendor area
@endsection()

@section('body')
    <div class="card card-primary container">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">Add Vendor Area</h2>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="padding-top: 7px;padding-bottom: 7px">
                <form action="{{route('vendorareainsert')}}" method="post" role="form" id="insertvendorarea" class="form-control">
                    {{csrf_field()}}
                    <div>
                        <label>Vendor Area</label>
                        <input type="text" name="vendorarea" class="form-control">
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-block btn-xl">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>

{{--        ajax?--}}
        <script>
            $(function () {
                $("#insertvendorarea").on("submit",function (e) {
                    e.preventDefault();
                    var form=$(this);
                    var url=form.attr("action");
                    var method=form.attr("method");
                    var data=form.serialize();
                    console.log( url );

                    $.ajax({
                        url:url,
                        data:data,
                        type:method,
                        dataType:"JSON",
                        success:function(data) {
                            if (data=="success"){
                                swal("Great","successfully inserted","success");
                            }
                            else {
                                swal("OOpps"," not successf","error");
                            }
                        },
                        error:function (error) {
                            swal("OOpps","inserted not success","error");
                        }


                    })
                })
            })
        </script>
{{--        end aajax?--}}
{{--list of vendor area--}}
        <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="padding-top: 7px;padding-bottom: 7px">
                <table class="table table-bordered table-striped table-responsive-lg">
                    <tr>
                        <th>Vendor Area</th>

                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>Motijheel</td>
                        <td>
                            <input type="submit" name="view" value="view" class="btn btn-success btn-sm ">
                            <input type="submit" name="delete" value="delete" class="btn btn-danger btn-sm ">
                            <input type="submit" name="edit" value="edit" class="btn btn-primary btn-sm ">
                        </td>
                    </tr>
                    <tr>
                        <td>Banani</td>
                        <td>
                            <input type="submit" name="view" value="view" class="btn btn-success btn-sm ">
                            <input type="submit" name="delete" value="delete" class="btn btn-danger btn-sm ">
                            <input type="submit" name="edit" value="edit" class="btn btn-primary btn-sm ">
                        </td>
                    </tr>
                    <tr>
                        <td>Gulsan</td>
                        <td>
                            <input type="submit" name="view" value="view" class="btn btn-success btn-sm ">
                            <input type="submit" name="delete" value="delete" class="btn btn-danger btn-sm ">
                            <input type="submit" name="edit" value="edit" class="btn btn-primary btn-sm ">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-3"></div>
        </div>


    </div>
@endsection()

