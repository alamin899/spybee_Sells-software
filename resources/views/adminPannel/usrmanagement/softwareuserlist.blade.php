@extends('adminPannel.master')
@section('title')
    User List
@endsection()

@section('body')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="card card-primary container">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">View User List</h2>
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>mobile</th>
                    <th>Id_no</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td><input type="checkbox" name="checkbox" id="checkbox"></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td class="badge bg-primary ">{{$user->role}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->id_no}}</td>
                    <td>{{$user->address}}</td>
                    <td>
                        <a href="{{route('individualuserview',['id'=>$user->id])}}" class="btn btn-success btn-sm">View</a>
                        <input type="submit" class="deleteuser btn btn-danger btn-sm" data-id="{{$user->id}}" value="delete">
                        <a href="{{route('individualuseredit',['id'=>$user->id])}}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>

    <script>
        $(".deleteuser").click(function () {
            console.log("click")
            var token = $("meta[name='csrf-token']").attr("content");
            var id = $(this).data("id");
            console.log(id)
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
                            url:"{{url('deleteuser')}}" + '/' +id,
                            type:"DELETE",
                            dataType:"JSON",
                            // data:{'_method':'DELETE','_token':csrf_token,'id':id},
                            data:{"id":id,"_token":token},
                            success:function (data) {
                                if (data=="success"){
                                    swal('wow','successfully delete','success');
                                    list()
                                }
                                else
                                    swal('Opps','Not Deleted','warning')
                            },
                            error:function (data) {
                                swal("OOpps","inserted not success","error");
                            }
                        })
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
        })





}




    </script>
@endsection()
