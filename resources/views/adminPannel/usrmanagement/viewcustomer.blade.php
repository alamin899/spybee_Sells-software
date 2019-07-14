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
        <div>
            <div class="pull-right">
                <table>
                    <tr>
                        <td><label>Search</label></td>
                        <td><input type="search" onkeyup="search()" class="table table-bordered table-striped  form-group " id="search"></td>
                    </tr>

                </table>


            </div>
            <table class="table table-bordered table-striped table-responsive-lg generaldata">
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
                @foreach($customers as $customer)
                <tr>
                    <td><input type="checkbox" name="checkbox" id="checkbox"></td>
                    <td>{{$customer->customername}}</td>
                    <td>{{$customer->customercompany}}</td>
                    <td>{{$customer->customeremail}}</td>
                    <td>{{$customer->customercontact}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->customeraddress}}</td>

                    <td>
                        <a href="{{route('indivicustomerview',['id'=>$customer->id])}}" name="view" class="btn btn-success btn-sm">view</a>
                        <input type="submit" class="deletecustomer btn btn-danger btn-sm" data-id="{{$customer->id}}" value="delete">
                        <a href="{{route('indicustupdate',['id'=>$customer->id])}}" name="edit" class="btn btn-primary btn-sm">edit</a>
                    </td>
                </tr>
                    @endforeach
            </table>
{{--            for searches value--}}

            <table class="table table-bordered table-striped table-responsive-lg ajaxdata"  style="display: none" >
                <tr>

                    <th>Name</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Customer Contact</th>
                    <th>mobile</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>

                   <tbody id="searchable">


                   </tbody>

            </table>
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
        })


    </script>
{{--    Search--}}
    <script type="text/javascript">
        function search() {
            var search=$('#search').val();
            if (search){
                $(".generaldata").hide();
                $(".ajaxdata").show();
            }
            else {
                $(".generaldata").show();
                $(".ajaxdata").hide();
            }
            console.log(search);


            $.ajax({
                url:"{{route('searchcustomer')}}",
                type:"POST",
                data:{search:search,_token:'{{csrf_token()}}'},
                dataType:"html",
                success:function (data) {
                    console.log(data);
                    $("#searchable").html(data);
                },
                error:function (error) {
                    swal("OOpps","inserted not success","error");
                }


            })
        }
    </script>
    {{--    End Search--}}
@endsection()
