
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
    <button> add to cart </button>
</div>

</div>
@endsection
