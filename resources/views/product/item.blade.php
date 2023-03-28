@extends('head')

@section('content')

<div class="d-flex flex-wrap justify-content-around">

    @foreach ($product as $item)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" style="height: 12rem;" src="{{$item->product_img}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$item->product_name}}</h5>
          <p class="card-text">{{$item->product_desc}}</p>
          <p class="small">จำนวนคงเหลือ {{$item->product_stock}} ชิ้น</p>
          <a href="#" onclick="addToCart({{$item->product_id}});" class="btn btn-primary">ซื้อเลย</a>
        </div>
    </div>
    @endforeach

</div>

@include('product.modal')
@include('product.script')

@endsection
