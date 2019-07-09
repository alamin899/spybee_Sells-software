@extends('adminPannel.master')
@section('title')
    Customer Update
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

                        <h3 class="profile-username text-center">{{$customers->customername}}</h3>
                        <h3 class="profile-username text-center">{{$customers->customeremail}}</h3>
                        <p class="text-muted text-center">Software Engineer</p>


                        <form action="" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div style="display: none;padding-bottom: 5px;" id="fileInput">
                                <input type="file"  name="image" >
                                <input type="hidden" name="id" value="{{$customers->id}}">
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
                                <form action="{{route('customerupdate')}}" method="post" id="customerupdate">
                                    {{csrf_field()}}
                                    <input type="hidden" value="{{$customers->id}}" name="id">
                                    <div class="row">
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Name:</b></div>
                                            <div class="col-md-6">
                                                <input type="text" name="customername" value="{{$customers->customername}}">
                                            </div>

                                        </div>
                                        <div class="col-md-6 row paddingleft">
                                            <div class="col-md-6"><b>Email adresse:</b></div>
                                            <div class="col-md-6">
                                                <input type="email" name="customeremail" value="{{$customers->customeremail}}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Company Name:</b></div>
                                            <div class="col-md-6">
                                                <input type="text" name="customercompany" value="{{$customers->customercompany}}">
                                            </div>

                                        </div>
                                        <div class="col-md-6 row paddingleft">
                                            <div class="col-md-6"><b>Contact Number</b></div>
                                            <div class="col-md-6">
                                                <input type="number" name="customercontact" value="{{$customers->customercontact}}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Alt.Contact Number:</b></div>
                                            <div class="col-md-6">
                                                <input type="number" name="customeraltcontact" value="{{$customers->customeraltcontact}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Mobile</b></div>
                                            <div class="col-md-6">
                                                <input type="text" name="phone" value="{{$customers->phone}}">
                                            </div>
                                        </div>


                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Alt.Mobile</b></div>
                                            <div class="col-md-6">
                                                <input type="number" name="phone1" value="{{$customers->phone1}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 row">
                                            <div class="col-md-6"><b>Address:</b></div>
                                            <div class="col-md-6">
                                                <textarea name="customeraddress">{{$customers->customeraddress}}</textarea>

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
            $("#customerupdate").on("submit",function (e) {
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
                            swal("Great","successfully updated","success");
                        }
                        else {
                            swal("OOpps"," There is No Change","error");
                        }
                    },
                    error:function (error) {
                        swal("OOpps","updated not success","error");
                    }


                })
            })
        })
    </script>
@endsection