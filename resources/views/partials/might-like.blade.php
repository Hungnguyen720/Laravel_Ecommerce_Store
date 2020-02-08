<div class="might-like-section">
    <div class="container">
        <h2>Check out these other products...</h2>
        <div class="might-like-grid">
        @foreach($mightAlsoLike as $product)
            <a href="#" class="might-like-product">
                <img src={{ $product->img }} alt="product">
                <div class="might-like-product-name">{{ $product->name }}</div>
                <div class="might-like-product-price">{{ $product->price }}</div>
            </a>
            @endforeach
        </div>
    </div>
</div>
