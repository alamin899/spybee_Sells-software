@extends('adminPannel.master')
@section('title')
    User Update
@endsection()

@section('body')
<style>
    .paddingleft{
        margin-left: 5px;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"  src="" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{$users->name}}</h3>
                    <h3 class="profile-username text-center">{{$users->email}}</h3>
                    <p class="text-muted text-center">Software Engineer</p>


                    <form action="" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div style="display: none;padding-bottom: 5px;" id="fileInput">
                            <input type="file"  name="image" >
                            <input type="hidden" name="id" value="{{$users->id}}">
                            <input type="submit" name="btn" value="submit" class="btn btn-block btn-success">
                        </div>
                    </form>
                    <a href="#" onclick="chooseFile();" class="btn btn-info btn-block">Image Update</a>

                    <script>
                        function chooseFile() {
                            $("#fileInput").toggle();
                        }
                    </script>


                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fa fa-book mr-1"></i> Role</strong>

                    <p class="text-muted">


                    </p>

                    <hr>

                    <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>

                    <p class="text-muted"></p>


                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <h2 class="text-center font-weight-bold">Update user</h2>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <!-- /.tab-pane -->
                        {{--Edit Profile from here--}}

                        <div class="tab-pane" id="settings">
                            <div class="container-fluid">
                                <form action="{{route('insertupdate')}}" method="post" id="userupdate">
                                    {{csrf_field()}}
                                    <input type="hidden" value="{{$users->id}}" name="id">
                                    <div class="row">
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Full Name:</b></div>
                                            <div class="col-md-6">
                                                <input type="text" name="name" value="{{$users->name}}">
                                            </div>

                                        </div>
                                        <div class="col-md-6 row paddingleft">
                                            <div class="col-md-6"><b>Email adresse:</b></div>
                                            <div class="col-md-6">
                                                <input type="email" name="email" value="{{$users->email}}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Contact Number:</b></div>
                                            <div class="col-md-6">
                                                <input type="number" name="phone" value="{{$users->phone}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Id_No:</b></div>
                                            <div class="col-md-6">
                                                <input type="text" name="id_no" value="{{$users->id_no}}">
                                            </div>
                                        </div>


                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6 row ">
                                            <div class="col-md-6"><b>Designation:</b></div>
                                            <div class="col-md-6">
                                                <select name="role">
                                                    <option>{{$users->role}}</option>
                                                    @foreach($roles as $role)
                                                        <option value="{{$role->userrole}}">{{$role->userrole}}</option>
                                                    @endforeach()
                                                </select>
                                                {{--                                                <input type="text" name="role" value="{{$users->role}}">--}}
                                            </div>

                                        </div>
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Address:</b></div>
                                            <div class="col-md-6">
                                                <textarea name="address">{{$users->address}}</textarea>

                                            </div>

                                        </div>

                                    </div>
                                    <hr>



                                    <div class="row">
                                        <div class="col-md-6 row ">
                                            <div class="col-md-6"><b></b></div>
                                            <div class="col-md-6">
                                                {{--<input type="file" id="image" name="image" value="{{$data->image}}" class="" style="text-decoration: none;display: inline-block">--}}

                                            </div>
                                        </div>

                                        <div class="col-md-6 row paddingleft">
                                            <div class="col-md-6"><b></b></div>
                                            <div class="col-md-6">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="btn btn-info btn-block" type="submit" name="btn" value="Update">

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

<script>
    $(function () {
        $("#userupdate").on("submit",function (e) {
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
@endsection