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
        <form role="form" class="form-control" id="softuserform" action="{{route('insertsoftwareuser')}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="row">
                <div class="col">
                    <label>User Name</label>
                    <input type="text" class="form-control"  name="name">
                </div>
                <div class="col">
                    <label>User Email</label>
                    <input type="email" class="form-control"  name="email">
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <label>User Role</label>
                    <select name="role" class="form-control" >
                        <option>--select Role--</option>
                        @foreach($roles as $role)
                            <option value="{{$role->userrole}}">{{$role->userrole}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col">
                    <label>User Id</label>
                    <input type="text" class="form-control"  name="id_no">
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <label>User Phone</label>
                    <input type="number" class="form-control"  name="phone">
                </div>
                <div class="col">
                    <label>User Address </label>
                    <textarea class="form-control"  name="address"></textarea>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="col">
                    <label>Profile Picture</label>
                    <input type="file" class="form-control" name="profile_image">
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
            $("#softuserform").on("submit",function (e) {
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
                            document.getElementById("softuserform").reset();
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

