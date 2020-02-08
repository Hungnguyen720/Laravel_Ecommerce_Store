
@extends('layouts.app')

@section('content')

<div class="container has-flex">
<div>
    <img src="{{$img}}" />
</div>
<div class="flex-vertical container-fluid ">
    <div class="flex-space-between mb-4">
        <span>{{ $type }}</span> <span>{{ $price}}</span>
    </div>
    <h1 mb-4>{{ $name}}</h1>
    <span>
        Select Size
    </span>
    <div class="sizes-container">
        <div><p>xs</p></div>
        <div>s</div>
        <div>m</div>
        <div>l</div>
        <div>xl</div>
        <div>2xl</div>
    </div>
    <button> add to cart </button>
</div>

</div>
@endsection
