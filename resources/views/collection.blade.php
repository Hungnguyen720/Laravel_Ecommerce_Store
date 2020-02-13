@extends('layouts.app')

@section('content')

<header></header>

<div class="container-fluid p-5">
<div class="container-fluid pb-5"><h1>{{ $category }}'s {{ $collection }}</h1>
</div>

<div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
            @foreach ($subCollections as $subCollection)
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo url()->current()?>?product_type={{$subCollection->name}}">
                  <span data-feather="home"></span>
                  {{$subCollection->name}} <span class="sr-only">(current)</span>
                </a>
              </li>
            @endforeach
        </ul>
      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        @component('components.product-card')
        @endcomponent
    </main>
</div>
</div>

@endsection
