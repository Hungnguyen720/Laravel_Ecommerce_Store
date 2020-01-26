
@extends('layouts.app')

@section('content')

<div id="app">
    <menus></menus>
</div>

<div class="container">

@foreach($orders as $order)
<!--
    1. loop through order array
    2. if current order_number of previous order  is the same, skip
    3. display
-->
<div class="card w-100">
    <div class="card-body">
    <h5 class="card-title">Order Number {{ $order->order_number }}</h5>
        @foreach($skus as $sku)
            @if( $sku->order_number == $order->order_number )
                <span>{{$sku->sku}}</span>
            @endif
        @endforeach
      <p class="card-text">{{$order->order_total}}</p>
      <p class="card-text">{{$order->customer}}</p>
      <p class="card-text">{{$order->order_number}}</p>


    </div>
  </div>
@endforeach

</div>

@endsection
