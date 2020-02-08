
@extends('layouts.app')

@section('title', 'test')


@section('content')
<div class="container has-flex">
<div>
    <img src="{{$product->img}}" />
</div>
<div class="flex-vertical container-fluid ">
    <div class="flex-space-between mb-4">
        <span>{{ $product->type }}</span> <span>${{ $product->price}}</span>
    </div>
    <h1 class="product-name">{{$product->name}}</h1>
    <span>
        Select Size
    </span>
    <div class="sizes-container">
        <div>
            <input class="visually-hidden" type="radio">
            <label class="select-container">XS</label>
        </div>
        <div>
            <input class="visually-hidden" type="radio">
            <label class="select-container">S</label>
        </div>
        <div>
            <input class="visually-hidden" type="radio">
            <label class="select-container">M</label>
        </div>
        <div>
            <input class="visually-hidden" type="radio">
            <label class="select-container">L</label>
        </div>
        <div>
            <input class="visually-hidden" type="radio">
            <label class="select-container">XL</label>
        </div>
        <div>
            <input class="visually-hidden" type="radio">
            <label class="select-container">2XL</label>
        </div>
    </div>
    <div>
    <form action="{{ route('cart.store')}}" method="POST">
        {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $product->id }}">
    <input type="hidden" name="name" value="{{ $product->name }}">
    <input type="hidden" name="price" value="{{ $product->price }}">

        <button type="submit" class="button button-plaid">

        </button>

    </form>
    <button aria-label="Add to Cart" class="ncss-btn-primary-dark btn-lg css-y0myut addToCartBtn"> Add to Cart</button>
    </div>
</div>

</div>

@include('partials.might-like')

@endsection
