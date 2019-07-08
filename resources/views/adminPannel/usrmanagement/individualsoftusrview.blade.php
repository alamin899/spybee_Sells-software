@extends('adminPannel.master')
@section('title')
    view user
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

                        <h3 class="profile-username text-center"></h3>
                        <h3 class="profile-username text-center"></h3>
                        <p class="text-muted text-center">Software Engineer</p>


{{--                        <form action="{{route('uploadimage')}}" method="post" enctype="multipart/form-data">--}}
{{--                            {{csrf_field()}}--}}
{{--                            <div style="display: none;padding-bottom: 5px;" id="fileInput">--}}
{{--                                <input type="file"  name="image" >--}}
{{--                                <input type="hidden" name="id" value="{{$data->id}}">--}}
{{--                                <input type="submit" name="btn" value="submit" class="btn btn-block btn-success">--}}
{{--                            </div>--}}
{{--                        </form>--}}
                        <a href="#" onclick="chooseFile();" class="btn btn-info btn-block">Image Update</a>

{{--                        <script>--}}
{{--                            function chooseFile() {--}}
{{--                                $("#fileInput").toggle();--}}
{{--                            }--}}
{{--                        </script>--}}


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
                            {{$users->role}}


                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>

                        <p class="text-muted">{{$users->address}}</p>


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <h2 class="text-center font-weight-bold">User View</h2>
{{--                        <ul class="nav nav-pills">--}}
{{--                            <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">About Me</a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit</a></li>--}}
{{--                        </ul>--}}
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- /.tab-pane -->
                            <div class="tab-pane active" id="timeline">
                                <div class="container-fluid">

                                    <div class="row">
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Full Name:</b></div>
                                            <div class="col-md-6"><span>{{$users->name}}</span></div>

                                        </div>
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Email adresse:</b></div>
                                            <div class="col-md-6"><span>{{$users->email}}</span></div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Contact Number:</b></div>
                                            <div class="col-md-6"><span>{{$users->phone}}</span></div>

                                        </div>
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Id_No</b></div>
                                            <div class="col-md-6"><span>{{$users->id_no}}</span></div>

                                        </div>

                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Address:</b></div>
                                            <div class="col-md-6"><span>{{$users->address}}</span></div>
                                        </div>
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Designation:</b></div>
                                            <div class="col-md-6"><span>{{$users->role}}</span></div>

                                        </div>

                                    </div>
                                    <hr>




                                </div>

                            </div>
                            <!-- /.tab-pane -->

                            {{--Edit Profile from here--}}


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


@endsection()

