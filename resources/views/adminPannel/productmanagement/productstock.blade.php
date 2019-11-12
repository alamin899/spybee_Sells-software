@extends('adminPannel.master')
@section('Stock')
    @endsection()
@section('body')
    <div class="container bg-light ">
        <h1 style="text-align: center">Product Quantity</h1><br>
    </div>
    <div class="divTable blueTable">
        <div class="divTableHeading">
            <div class="divTableRow">
                <div class="divTableHead">Srl</div>
                <div class="divTableHead">ProductName</div>
                <div class="divTableHead">Quantity</div>
            </div>
        </div>
        <div class="divTableBody">
            @php($i=1)
            @foreach($products as $product)
            <div class="divTableRow">
                <div class="divTableCell"><h4>{{$i++}}</h4></div>
                <div class="divTableCell"><h4>{{$product->pname}}</h4></div>
                @if($product->quantity <5)
                <div class="divTableCell bg-danger"><h4>{{$product->quantity}}</h4><span>Please add Product to stock</span></div>
                    @else
                    <div class="divTableCell"><h4>{{$product->quantity}}</h4></div>
                    @endif
            </div>
                @endforeach
        </div>
    </div>
    <div class="blueTable outerTableFooter">
        <div class="tableFootStyle">
            <div class="links">{{ $products->links() }}</div>
        </div>
    </div>


    @endsection