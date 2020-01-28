@extends('layouts.app')

@section('content')

<div class="hero">
    <div class="element-wrapper">
    <img src="{{asset('assets/Hero.jpg')}}">
    </div>
</div>

<div class="about-demo">
    <h4>Ecommerce Website built in Laravel by Hung Nguyen</h4>
    <h5>Hello! Thank you for visiting my Ecommerce Demo site.</h5>
</div>

<div style="max-width: 100%">
<div class=" product-categories has-flex">
    <div class="product-category">
        <div class="product-category-wrapper">
                <div class="element-wrapper">
                <img src={{asset('assets/product_category_1.png')}}>
                </div>
        </div>
    </div>

    <div class="product-category">
        <div class="product-category-wrapper">
            <div class="element-wrapper">
                <img src={{asset('assets/product_category_2.jpg')}}>
            </div>
        </div>
    </div>

    <div class="product-category">
        <div class="product-category-wrapper">
            <div class="element-wrapper">
                <img src={{asset('assets/product_category_3.jpg')}}>
            </div>
        </div>
    </div>

    <div class="product-category">
        <div class="product-category-wrapper">
            <div class="element-wrapper">
                <img src={{asset('assets/product_category_4.jpg')}}>
            </div>
        </div>
    </div>

</div>
</div>

<div style="width: 100vw" class="has-flex">
    <div class="sub-hero " style="height: auto; width: 50vw;">
        <div class="section-1 bg-red element-wrapper">
            <img src={{asset('assets/section-1.jpg')}} style="height: auto">
        </div>
    </div>
    <div class="sub-hero has-flex" style="height: auto; width:50vw">
        <div class="section-1 element-wrapper flex-vertical-center ">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus qui repellendus at, omnis enim sunt. Iure earum dolore culpa, fugiat corrupti praesentium hic est, dolorem at odit illum neque eos!</h1>
        </div>
    </div>
</div>

<div style="width: 100vw" class="has-flex">
    <div class="sub-hero has-flex" style="height: auto; width:50vw">
        <div class="section-1 element-wrapper flex-vertical-center ">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus qui repellendus at, omnis enim sunt. Iure earum dolore culpa, fugiat corrupti praesentium hic est, dolorem at odit illum neque eos!</h1>
        </div>
    </div>
    <div class="sub-hero " style="height: auto; width: 50vw;">
        <div class="section-1 element-wrapper">
            <img src={{asset('assets/section-2.jpg')}} style="height: auto">
        </div>
    </div>
</div>
@endsection
