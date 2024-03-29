@extends('adminPannel.master')
@section('title')
    user
@endsection()

@section('body')
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    email varification check--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{--end email avilability check--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <div class="card card-primary container">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">Add New User</h2>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" class="form-control" id="softuserform" action="{{route('insertsoftwareuser')}}" method="post" enctype="multipart/form-data">
{{--            {{csrf_field()}}--}}
            <input type="hidden" name="_token" id="_token" value="<?php echo csrf_token(); ?>">
            <div class="row">
                <div class="col">
                    <label>User Name</label>
                    <input type="text" class="form-control"  name="name">
                </div>
                <div class="col emailcheck">
                    <label>User Email</label>
                    <input type="email" class="form-control"  name="email" id="emailcheck">

                    <span id="error_email"></span>

                </div>

            </div>
            <div class="row">
                <div class="col">
                    <label>User Role</label>
                    <select name="role" id="dropdown" class="form-control" >
                        <option>--select Role--</option>
                        @foreach($roles as $role)
                            <option value="{{$role->userrole}}">{{$role->userrole}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col">
                    <label>User Id</label>
                    <input type="text" class="form-control" id="userid"  name="id_no">
                    <span id="error_userid"></span>
                </div>

            </div>
            <div class="row">
                <div class="col phonecheck">
                    <label>User Phone</label>
                    <input type="number" class="form-control"  name="phone" id="phone">
                    <span id="error_phone"></span>
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
                <button type="submit" class="btn btn-primary btn-block" id="register">Submit</button>
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

{{--ajax of email availability check--}}

<script>

    {{--ajax of email availability check--}}
    $(document).ready(function(){

        $('.emailcheck').delegate('#emailcheck','keyup',function(){
            var error_email = '';
            var email = $(this).val();
            var _token = $('#_token').val();
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(!filter.test(email))
            {
                $('#error_email').html('<label class="text-danger">Invalid Email</label>');
                $('#email').addClass('has-error');
                $('#register').attr('disabled', 'disabled');
            }
            else
            {
                $.ajax({
                    url:"{{ url('email_available') }}",
                    method:"post",
                    data:{email:email,_token:_token},
                    success:function(result)
                    {
                        if(result == 'unique')
                        {
                            $('#error_email').html('<label class="text-success">Email Available</label>');
                            $('#email').removeClass('has-error');
                            $('#register').attr('disabled', false);
                        }
                        else
                        {
                            $('#error_email').html('<label class="text-danger">Email not Available</label>');
                            $('#email').addClass('has-error');
                            $('#register').attr('disabled', 'disabled');
                        }
                    },
                    error:function () {

                    }
                })
            }
        });

    });

</script>

    {{--ajax Phone number availability check--}}

    <script>

        $(document).ready(function(){

            $('.phonecheck').delegate('#phone','keyup',function(){
                var phone_email = '';
                var phone = $(this).val();
                console.log(phone);
                var _token = $('#_token').val();
                var filter = /(^([+]{1}[8]{2}|0088)?(01){1}[5-9]{1}\d{8})$/;
                if(!filter.test(phone))
                {
                    $('#error_phone').html('<label class="text-danger">Invalid Mobile</label>');
                    $('#phone').addClass('has-error');
                    // $('#register').attr('disabled', 'disabled');
                }
                else
                {
                    $.ajax({
                        url:"{{ url('phone_available') }}",
                        method:"post",
                        data:{phone:phone,_token:_token},
                        success:function(result)
                        {
                            if(result == 'unique')
                            {
                                $('#error_phone').html('<label class="text-success">Mobile Number is Available</label>');
                                $('#phone').removeClass('has-error');
                                // $('#register').attr('disabled', false);
                            }
                            else
                            {
                                $('#error_phone').html('<label class="text-danger">Mobile Number is not Available</label>');
                                $('#phone').addClass('has-error');
                                // $('#register').attr('disabled', 'disabled');
                            }
                        },
                        error:function () {

                        }
                    })
                }
            });

        });

        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
    </script>

    {{--ajax User Id availability check--}}

    <script>

        $(document).ready(function(){

            $('#userid').blur(function(){
                var phone_email = '';
                var userid = $(this).val();
                console.log(phone);
                var _token = $('#_token').val();
               // var filter = /(^([+]{1}[8]{2}|0088)?(01){1}[5-9]{1}\d{8})$/;
               //  if(!filter.test(phone))
               //  {
               //      $('#error_phone').html('<label class="text-danger">Invalid Mobile</label>');
               //      $('#phone').addClass('has-error');
               //      $('#register').attr('disabled', 'disabled');
               //  }
               //  else
               //  {
                    $.ajax({
                        url:"{{ url('userid_available') }}",
                        method:"post",
                        data:{id_no:userid,_token:_token},
                        success:function(result)
                        {
                            if(result == 'unique')
                            {
                                $('#error_userid').html('<label class="text-success">User Id is Available</label>');
                                $('#userid').removeClass('has-error');

                            }
                            else
                            {
                                $('#error_userid').html('<label class="text-danger">User Id is Not Available</label>');
                                $('#userid').addClass('has-error');
                                // $('#register').attr('disabled', 'disabled');
                            }
                        },
                        error:function () {

                        }
                    })
                // }
            });

        });

        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
    </script>


{{--end ajax of email availability check--}}
    {{--dropdown searchable--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script type="text/javascript">
        $("#dropdown").select2({

        })

    </script>





@endsection()

