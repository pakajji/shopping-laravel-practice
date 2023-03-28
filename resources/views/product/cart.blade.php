@extends('head')

@section('content')

@foreach ($product as $item)
            <div class="card">
                <div class="card-body">
                    {{$item->product_name}}
                </div>
            </div>
@endforeach

@endsection
