@extends('adminPannel.master')
@section('title')
     Customer List
@endsection()

@section('body')
    <div class="card card-primary container">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">View Customer List</h2>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="col card-body">

            <table class="table table-bordered table-striped table-responsive-lg generaldata" id="customer_data_table">
                <thead>
                <tr>
                    <th>Select</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Customer Contact</th>
                    <th>mobile</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                </thead>

{{--                @foreach($customers as $customer)--}}
{{--                <tr>--}}
{{--                    <td><input type="checkbox" name="checkbox" id="checkbox"></td>--}}
{{--                    <td>{{$customer->customername}}</td>--}}
{{--                    <td>{{$customer->customercompany}}</td>--}}
{{--                    <td>{{$customer->customeremail}}</td>--}}
{{--                    <td>{{$customer->customercontact}}</td>--}}
{{--                    <td>{{$customer->phone}}</td>--}}
{{--                    <td>{{$customer->customeraddress}}</td>--}}

{{--                    <td>--}}
{{--                        <a href="{{route('indivicustomerview',['id'=>$customer->id])}}" name="view" class="btn btn-success btn-sm">view</a>--}}
{{--                        <input type="submit" class="deletecustomer btn btn-danger btn-sm" data-id="{{$customer->id}}" value="delete">--}}
{{--                        <a href="{{route('indicustupdate',['id'=>$customer->id])}}" name="edit" class="btn btn-primary btn-sm">edit</a>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                    @endforeach--}}
            </table>
{{--            for searches value--}}


        </div>
    </div>
    <script>
        $(".deletecustomer").click(function () {

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
                            url:"{{url('deletecustomer')}}" + '/' +id,
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
                                swal("OOpps","delete not success","error");
                            }
                        })
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
        });
        $(function () {
            $('#customer_data_table').DataTable({
                processing:true,
                serverSide:true,
                ajax:'{!! route('customerdatatable') !!}',
                columns:[
                    {data:'checkbox',orderable:false,searchable:false},
                    { data: 'customername', name: 'customername' },
                    { data: 'customercompany', name: 'customercompany' },
                    { data: 'customeremail', name: 'customeremail' },
                    { data: 'customercontact', name: 'customercontact' },
                    { data: 'phone', name: 'phone' },
                    { data: 'customeraddress', name: 'customeraddress' },
                    {data:'action', name:'action'}

                ]
            });
        });


    </script>

@endsection()
