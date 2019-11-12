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
            <table class="table table-bordered table-striped table-responsive-lg" id="producttable">
                <thead>
                <tr>
                    <th>serial</th>
                    <th>Produc Name</th>
                    <th>Serial No</th>
                    <th>Model</th>
                    <th>Brand</th>
                    <th>Buying Date</th>
                    <th>buying price</th>
                    <th>Selling Price</th>
                    <th>Quantity</th>
                    <th>short descrp</th>
                    <th>Action</th>
                </tr>
                </thead>
{{--                @php($i=1)--}}
                <tbody>

                @foreach($products as $product)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$product->pname}}</td>
                        <td>{{$product->pserialno}}</td>
                        <td>{{$product->pmodel}}</td>
                        <td>{{$product->pbrand}}</td>
                        <td>{{$product->pbuydate}}</td>
                        <td>{{$product->pbuyprice}}</td>
                        <td>{{$product->psellprice}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->pshortdesc}}</td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            {{$products->links()}}
        </div>
    </div>
{{--    <script>--}}
{{--        $(function () {--}}
{{--            $('#producttable').DataTable({--}}
{{--                processing:true,--}}
{{--                serverSide:true,--}}
{{--                ajax:'{!! route('productdatatable') !!}',--}}
{{--                columns:[--}}

{{--                    { data: 'pname', name: 'pname' },--}}
{{--                    { data: 'pserialno', name: 'pserialno' },--}}
{{--                    { data: 'pbrand', name: 'pbrand' },--}}
{{--                    { data: 'pmodel', name: 'pmodel' },--}}
{{--                    { data: 'pbuydate', name: 'pbuydate' },--}}
{{--                    { data: 'pbuyprice', name: 'pbuyprice' },--}}
{{--                    { data: 'psellprice', name: 'psellprice' },--}}
{{--                    { data: 'pshortdesc', name: 'pshortdesc' },--}}
{{--                     {data:'action', name:'action'}--}}

{{--                ]--}}
{{--            });--}}
{{--        });--}}

{{--    </script>--}}
@endsection()
