@extends('adminPannel.master')
@section('title')
    product list
@endsection()

@section('body')
    <div class="card card-primary container">
        <div class="card-header" style="text-align: center;background: #adb7af;color: black;">
            <h2 class="card-title">View Product List</h2>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="col card-body">
            <table class="table table-bordered table-striped table-responsive-lg" id="productdatatable">
                <thead>
                <tr>
                    <th>Select</th>
                    <th>Produc Name</th>
                    <th>Serial No</th>
                    <th>Model</th>
                    <th>Brand</th>
                    <th>Buying Date</th>
                    <th>buying price</th>
                    <th>Selling Price</th>
                    <th>vendor</th>
                    <th>short descrp</th>
{{--                    <th>Action</th>--}}
                </tr>
                </thead>
{{--                <tr>--}}
{{--                    <td><input type="checkbox" name="checkbox" id="checkbox"></td>--}}
{{--                    <td>Panoromic Camera</td>--}}
{{--                    <td>3l04395PAZ5C43D</td>--}}
{{--                    <td>DHI-XV123</td>--}}
{{--                    <td>DAHUA</td>--}}
{{--                    <td>7/4/19</td>--}}
{{--                    <td>2500</td>--}}
{{--                    <td>3500</td>--}}
{{--                    <td>VERBAL,motijheel</td>--}}
{{--                    <td>vr cam 3mp panoramic camera</td>--}}
{{--                    <td>--}}
{{--                        <input type="submit" name="delete" value="view" class="btn btn-success btn-sm ">--}}
{{--                        <input type="submit" name="delete" value="delete" class="btn btn-danger btn-sm ">--}}
{{--                        <input type="submit" name="delete" value="edit" class="btn btn-primary btn-sm ">--}}
{{--                    </td>--}}
{{--                </tr>--}}
            </table>
        </div>
    </div>
    <script>
        $(function () {
            $('#productdatatable').DataTable({
                processing:true,
                serverSide:true,
                ajax:'{!! route('productdatatable') !!}',
                // columns:[
                //     {data:'checkbox',orderable:false,searchable:false},
                //     { data: 'pname', name: 'pname' },
                //     { data: 'pserialno', name: 'pserialno' },
                //     { data: 'pmodel', name: 'pmodel' },
                //     { data: 'pbrand', name: 'pbrand' },
                //     { data: 'pbuydate', name: 'pbuydate' },
                //     { data: 'pbuyprice', name: 'pbuyprice' },
                //     { data: 'psellprice', name: 'psellprice' },
                //     { data: 'vendor', name: 'vendor' },
                //     { data: 'pshortdesc', name: 'pshortdesc' },
                //     // {data:'action', name:'action'}
                //
                // ]
            });
        });

    </script>
@endsection()
