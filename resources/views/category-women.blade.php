@extends('layouts.app')

@section('content')
<div class="container">
    <!--menu -->
    <div class="row ">
        <div class="menu has-flex menu-wrapper">
            <h1 class="menu-header">Women</h1>
            <div class="menu-list">
                <ul>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">Tops</a></li>
                    <li><a href="#">Bottoms</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--Hero -->
    <div class="row">
        <div style="height: 500px">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/women-hero.webp')}}>
        </div>
    </div>
    <!--This week's picks -->
    <h1>This weeks picks</h1>
    <div class="row">
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
    </div>
    <!-- Best Sellers -->
    <h1>Best Sellers</h1>
    <div class="row">
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
    </div>
    <!-- Our Fave -->
    <h1>Our Fave</h1>
    <div class="row">
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
    </div>
    <!--Social -->
    <h1>Social</h1>
    <div class="row">
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
        <div class="col-md">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
        </div>
    </div>
</div>
@endsection