
@extends('adminPannel.master')
@section('title')
    user
@endsection()

@section('body')
    <div class="card card-primary container">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">Add New User</h2>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="padding-top: 7px;padding-bottom: 7px">
                <form role="form" class="form-control" id="userrole" action="{{route('insertrole')}}" method="post">
                    {{csrf_field()}}
                    <div>
                        <label>User Role</label>
                        <input type="text" name="userrole" class="form-control">
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
        <script>
            $(function () {
                $("#userrole").on("submit",function (e) {
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
                                swal("Great","successfully inserted User Role","success");
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
       {{--usser role list--}}

        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">User role List</h2>
        </div>
        <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="padding-top: 7px;padding-bottom: 7px">
                <table class="table table-bordered table-striped table-responsive-lg">
                    <tr>
                        <th>Role</th>

                        <th>Action</th>
                    </tr>
                    @foreach($roles as $role)
                    <tr>
                        <td>{{$role->userrole}}</td>
                        <td>
                            <a href="" name="delete" class="btn btn-danger btn-sm">delete</a>
                            <a href="" name="edit"   class="editview btn btn-primary btn-sm">edit</a>
                        </td>
                    </tr>
                        @endforeach

                </table>
            </div>
            <div class="col-md-3"></div>
        </div>


    </div>
    <script>

    </script>

@endsection()

