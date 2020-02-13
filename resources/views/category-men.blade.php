@extends('layouts.app')

@section('content')
<div class="container">
    <!--menu -->
    <div class="row ">
        <div class="menu has-flex menu-wrapper">
            <h1 class="menu-header">Men</h1>
            <div class="menu-list">
                <ul>
                    <li><a href="<?php echo url()->current()?>/collection/shoes">Shoes</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--Hero -->
    <div class="row">
        <div style="height: 500px">
            <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men-hero.webp')}}>
        </div>
    </div>
    <!--This week's picks -->
    <div class="row">
        <h1>This weeks picks</h1>
        <div>
            <div class="row">
                <div class="col-md product-container">
                    <div class="row">
                        <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
                    </div>
                    <div class="row flex-md-column">
                        <h4>
                            Nike Air Max 90
                        </h4>
                        <p>
                            Men's Shoe
                        </p>
                        <p>
                            $100
                        </p>
                    </div>
                </div>
                <div class="col-md product-container">
                    <div class="row">
                        <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
                    </div>
                    <div class="row flex-md-column">
                        <h4>
                            Nike Air Max 90
                        </h4>
                        <p>
                            Men's Shoe
                        </p>
                        <p>
                            $100
                        </p>
                    </div>
                </div>
                <div class="col-md product-container">
                    <div class="row">
                        <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
                    </div>
                    <div class="row flex-md-column">
                        <h4>
                            Nike Air Max 90
                        </h4>
                        <p>
                            Men's Shoe
                        </p>
                        <p>
                            $100
                        </p>
                    </div>
                </div>
                <div class="col-md product-container">
                    <div class="row">
                        <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
                    </div>
                    <div class="row flex-md-column">
                        <h4>
                            Nike Air Max 90
                        </h4>
                        <p>
                            Men's Shoe
                        </p>
                        <p>
                            $100
                        </p>
                    </div>
                </div>
                <div class="col-md product-container">
                    <div class="row">
                        <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
                    </div>
                    <div class="row flex-md-column">
                        <h4>
                            Nike Air Max 90
                        </h4>
                        <p>
                            Men's Shoe
                        </p>
                        <p>
                            $100
                        </p>
                    </div>
                </div>
            </div>
            <!-- Best Sellers -->
            <div class="row">
                <h1>Best Sellers</h1>
            </div>
            <div class="row">
                <div class="col-md product-container">
                    <div class="row">
                        <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
                    </div>
                    <div class="row flex-md-column">
                        <h4>
                            Nike Air Max 90
                        </h4>
                        <p>
                            Men's Shoe
                        </p>
                        <p>
                            $100
                        </p>
                    </div>
                </div>
                <div class="col-md product-container">
                    <div class="row">
                        <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
                    </div>
                    <div class="row flex-md-column">
                        <h4>
                            Nike Air Max 90
                        </h4>
                        <p>
                            Men's Shoe
                        </p>
                        <p>
                            $100
                        </p>
                    </div>
                </div>
                <div class="col-md product-container">
                    <div class="row">
                        <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
                    </div>
                    <div class="row flex-md-column">
                        <h4>
                            Nike Air Max 90
                        </h4>
                        <p>
                            Men's Shoe
                        </p>
                        <p>
                            $100
                        </p>
                    </div>
                </div>
                <div class="col-md product-container">
                    <div class="row">
                        <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
                    </div>
                    <div class="row flex-md-column">
                        <h4>
                            Nike Air Max 90
                        </h4>
                        <p>
                            Men's Shoe
                        </p>
                        <p>
                            $100
                        </p>
                    </div>
                </div>
                <div class="col-md product-container">
                    <div class="row">
                        <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
                    </div>
                    <div class="row flex-md-column">
                        <h4>
                            Nike Air Max 90
                        </h4>
                        <p>
                            Men's Shoe
                        </p>
                        <p>
                            $100
                        </p>
                    </div>
                </div>
            </div>
            <!-- Our Fave -->
            <div class="row">
                <h1>Our Fave</h1>
            </div>
            <div class="row">
                <div class="col-md product-container">
                    <div class="row">
                        <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
                    </div>
                    <div class="row flex-md-column">
                        <h4>
                            Nike Air Max 90
                        </h4>
                        <p>
                            Men's Shoe
                        </p>
                        <p>
                            $100
                        </p>
                    </div>
                </div>
                <div class="col-md product-container">
                    <div class="row">
                        <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
                    </div>
                    <div class="row flex-md-column">
                        <h4>
                            Nike Air Max 90
                        </h4>
                        <p>
                            Men's Shoe
                        </p>
                        <p>
                            $100
                        </p>
                    </div>
                </div>
                <div class="col-md product-container">
                    <div class="row">
                        <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
                    </div>
                    <div class="row flex-md-column">
                        <h4>
                            Nike Air Max 90
                        </h4>
                        <p>
                            Men's Shoe
                        </p>
                        <p>
                            $100
                        </p>
                    </div>
                </div>
                <div class="col-md product-container">
                    <div class="row">
                        <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
                    </div>
                    <div class="row flex-md-column">
                        <h4>
                            Nike Air Max 90
                        </h4>
                        <p>
                            Men's Shoe
                        </p>
                        <p>
                            $100
                        </p>
                    </div>
                </div>
                <div class="col-md product-container">
                    <div class="row">
                        <img style="height: 100%; width: 100%; object-fit: cover" src={{asset('assets/men_shoe_1.webp')}}>
                    </div>
                    <div class="row flex-md-column">
                        <h4>
                            Nike Air Max 90
                        </h4>
                        <p>
                            Men's Shoe
                        </p>
                        <p>
                            $100
                        </p>
                    </div>
                </div>
            </div>
            <!--Social -->
            <div class="row">
                <h1>Social</h1>
            </div>
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
