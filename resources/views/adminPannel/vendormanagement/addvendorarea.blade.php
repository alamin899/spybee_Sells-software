
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
                    @foreach($vendorarea as $vendor)
                    <tr>
                        <td>{{$vendor->vendorarea}}</td>
                        <td>
                            <input type="submit" class="deleteuser btn btn-danger btn-sm" data-id="{{$vendor->id}}" value="delete">

                        </td>
                    </tr>
                        @endforeach

                </table>
            </div>
            <div class="col-md-3"></div>
        </div>


    </div>
    {{--//delete vendor--}}

    <script>
        $(".deleteuser").click(function () {

            var token = $("meta[name='csrf-token']").attr("content");
            var id = $(this).data("id");

            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url:"{{url('deletevendorarea')}}" + '/' +id,
                            type:"DELETE",
                            dataType:"JSON",
                            data:{"id":id,"_token":token},
                            success:function (data) {
                                if (data == "success"){
                                    swal('wow','successfully delete','success');

                                }
                                else
                                    swal('Opps','Not Deleted','warning')
                            },
                            error:function (data) {
                                swal("OOpps","delete not success","error");
                            }
                        })
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
        })


    </script>
@endsection()

