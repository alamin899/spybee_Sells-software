@extends('adminPannel.master')
@section('title')
    Vendor List
@endsection()

@section('body')
    <div class="card card-primary container">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">View Vendor List</h2>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div>
            <div class="pull-right">
                <table>
                    <tr>
                        <td><label>Search</label></td>
                        <td><input type="search" class="table table-bordered table-striped  form-group "></td>
                    </tr>

                </table>


            </div>
            <table class="table table-bordered table-striped table-responsive-lg">
                <tr>
                    <th>Select</th>
                    <th>Vendor Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Contact Phone</th>
                    <th>Short Address</th>
                    <th>Action</th>
                </tr>
                @foreach($vendors as $vendor)
                <tr>
                    <td><input type="checkbox" name="checkbox" id="checkbox"></td>
                    <td>{{$vendor->vname}}</td>
                    <td>{{$vendor->vemail}}</td>
                    <td>{{$vendor->vphone}}</td>
                    <td>{{$vendor->cpmob1}}</td>

                    <td>{{$vendor->vsaddress}}</td>
                    <td>
                        <a href="{{route('individualvendor',['id'=>$vendor->id])}}" name="view" class="btn btn-success btn-sm" >view</a>
                        <input type="submit" class="deleteuser btn btn-danger btn-sm" data-id="{{$vendor->id}}" value="delete">
                        <a href="{{route('indvendorupdate',['id'=>$vendor->id])}}" name="edit" class="btn btn-primary btn-sm">edit</a>
                    </td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>


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
                            url:"{{url('deletevendor')}}" + '/' +id,
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



