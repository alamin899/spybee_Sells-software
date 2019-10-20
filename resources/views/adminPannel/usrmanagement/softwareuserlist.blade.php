@extends('adminPannel.master')
@section('title')
    User List
@endsection()

@section('body')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="card card-primary container ">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">View User List</h2>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <div class="col card-body ">

            <table class="table table-bordered table-striped table-responsive-lg generaldata " id="users">
                <thead>
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
                </thead>

            </table>

        </div>
    </div>

    <script>
        $(function() {
            $('#users').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('yajradataTables') !!}',
                columns: [
                    {data:'checkbox',orderable:false,searchable:false},
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'role', name: 'role' },
                    { data: 'phone', name: 'phone' },
                    { data: 'id_no', name: 'id_no' },
                    { data: 'address', name: 'address' },
                    {data: 'action', name: 'action'}
                    // ['id'=>$user->id]



                ]
            });
        });
    </script>

{{--    <script>--}}
{{--        $(".deleteuser").click(function () {--}}

{{--            var token = $("meta[name='csrf-token']").attr("content");--}}
{{--            var id = $(this).data("id");--}}

{{--            swal({--}}
{{--                title: "Are you sure?",--}}
{{--                text: "Once deleted, you will not be able to recover this imaginary file!",--}}
{{--                icon: "warning",--}}
{{--                buttons: true,--}}
{{--                dangerMode: true,--}}
{{--            })--}}
{{--                .then((willDelete) => {--}}
{{--                    if (willDelete) {--}}
{{--                        $.ajax({--}}
{{--                            url:"{{url('deleteuser')}}" + '/' +id,--}}
{{--                            type:"DELETE",--}}
{{--                            dataType:"JSON",--}}
{{--                            // data:{'_method':'DELETE','_token':csrf_token,'id':id},--}}
{{--                            data:{"id":id,"_token":token},--}}
{{--                            success:function (data) {--}}
{{--                                if (data == "success"){--}}
{{--                                    swal('wow','successfully delete','success');--}}

{{--                                }--}}
{{--                                else--}}
{{--                                    swal('Opps','Not Deleted','warning')--}}
{{--                            },--}}
{{--                            error:function (data) {--}}
{{--                                swal("OOpps","delete not success","error");--}}
{{--                            }--}}
{{--                        })--}}
{{--                    } else {--}}
{{--                        swal("Your imaginary file is safe!");--}}
{{--                    }--}}
{{--                });--}}
{{--        })--}}


{{--    </script>--}}

@endsection()
