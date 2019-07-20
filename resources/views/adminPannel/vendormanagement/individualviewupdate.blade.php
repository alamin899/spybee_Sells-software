@extends('adminPannel.master')
@section('title')
    Vendor
@endsection()

@section('body')

@if($data=="view")
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



                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>

                        <p class="text-muted">{{$vendor->varea}}</p>


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <h2 class="text-center font-weight-bold">Vendor View</h2>
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
                                            <div class="col-md-6"><span>{{$vendor->vname}}</span></div>

                                        </div>
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Email adresse:</b></div>
                                            <div class="col-md-6"><span>{{$vendor->vemail}}</span></div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Vendor Mobile:</b></div>
                                            <div class="col-md-6"><span>{{$vendor->vphone}}</span></div>

                                        </div>
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Company Name</b></div>
                                            <div class="col-md-6"><span>{{$vendor->companyname}}</span></div>

                                        </div>

                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Contact person name</b></div>
                                            <div class="col-md-6"><span>{{$vendor->cpname}}</span></div>
                                        </div>
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Contact person Email</b></div>
                                            <div class="col-md-6"><span>{{$vendor->cpemail}}</span></div>

                                        </div>

                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Contact person Mobile</b></div>
                                            <div class="col-md-6"><span>{{$vendor->cpmob1}}</span></div>
                                        </div>
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Contact person Alt.Mob</b></div>
                                            <div class="col-md-6"><span>{{$vendor->cpmob2}}</span></div>

                                        </div>

                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Vendor Short Address</b></div>
                                            <div class="col-md-6"><span>{{$vendor->vsaddress}}</span></div>
                                        </div>
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Vendor Full Address</b></div>
                                            <div class="col-md-6"><span>{{$vendor->vfaddress}}</span></div>

                                        </div>

                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Vendor Area</b></div>
                                            <div class="col-md-6"><span>{{$vendor->varea}}</span></div>

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


    @else

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

                        <h3 class="profile-username text-center">{{$vendor->vname}}</h3>
                        <h3 class="profile-username text-center">{{$vendor->vemail}}</h3>



                        <form action="" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div style="display: none;padding-bottom: 5px;" id="fileInput">
                                <input type="file"  name="image" >
                                <input type="hidden" name="id" value="">
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

                        <p class="text-muted">{{$vendor->varea}}</p>


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <h2 class="text-center font-weight-bold">Update Vendor</h2>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <!-- /.tab-pane -->
                        {{--Edit Profile from here--}}

                        <div class="tab-pane" id="settings">
                            <div class="container-fluid">
                                <form action="{{route('vendorupdate')}}" method="post" id="vendorupdate">
                                    {{csrf_field()}}
                                    <input type="hidden" value="{{$vendor->id}}" name="id">
                                    <div class="row">
                                        <div class="col row">
                                            <div class="col"><b>Name</b></div>
                                            <div class="col">
                                                <input type="text" name="vname" value="{{$vendor->vname}}">
                                            </div>

                                        </div>
                                        <div class="col row paddingleft">
                                            <div class="col"><b>Email </b></div>
                                            <div class="col">
                                                <input type="email" name="vemail" value="{{$vendor->vemail}}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col row">
                                            <div class="col"><b>Phone</b></div>
                                            <div class="col">
                                                <input type="number" name="vphone" value="{{$vendor->vphone}}">
                                            </div>

                                        </div>
                                        <div class="col row paddingleft">
                                            <div class="col"><b>Company Name </b></div>
                                            <div class="col">
                                                <input type="text" name="companyname" value="{{$vendor->companyname}}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>


                                    <div class="row">
                                        <div class="col row">
                                            <div class="col"><b>Contact person Name:</b></div>
                                            <div class="col">
                                                <input type="text" name="cpname" value="{{$vendor->cpname}}">
                                            </div>

                                        </div>
                                        <div class="col row ">
                                            <div class="col"><b>Contact person email:</b></div>
                                            <div class="col">
                                                <input type="email" name="cpemail" value="{{$vendor->cpemail}}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col row">
                                            <div class="col"><b>Contact person mob</b></div>
                                            <div class="col">
                                                <input type="number" name="cpmob1" value="{{$vendor->cpmob1}}">
                                            </div>

                                        </div>
                                        <div class="col row">
                                            <div class="col"><b>Contact person alt.mob</b></div>
                                            <div class="col">
                                                <input type="number" name="cpmob2" value="{{$vendor->cpmob2}}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col row">
                                            <div class="col"><b>Vendor short address</b></div>
                                            <div class="col">
                                                <textarea name="vsaddress">{{$vendor->vsaddress}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col row">
                                            <div class="col"><b>Vendor Full address</b></div>
                                            <div class="col">
                                                <textarea name="vfaddress">{{$vendor->vfaddress}}</textarea>
                                            </div>
                                        </div>


                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Vendor area</b></div>
                                            <div class="col-md-6">
                                                <select name="varea">
                                                    <option value="{{$vendor->varea}}">{{$vendor->varea}}</option>
                                                </select>
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


    <script>
        $(function () {
            $("#vendorupdate").on("submit",function (e) {
                e.preventDefault();
                var form=$(this);
                var url=form.attr("action");
                var method=form.attr("method");
                var data=form.serialize();


                $.ajax({
                    url:url,
                    data:data,
                    type:method,
                    dataType:"JSON",
                    success:function(data) {
                        if (data=="success"){
                            swal("Great","successfully updated","success");
                        }
                        else {
                            swal("OOpps"," There is No Change","error");
                        }
                    },
                    error:function (error) {
                        swal("OOpps","updated not success!!something error","error");
                    }


                })
            })
        })
    </script>

    @endif


@endsection()
