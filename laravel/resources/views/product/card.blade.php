
<div class="container">
    <div class="row justify-content-center">
        @foreach ($products as $product)
            <div class="product-card">
                <div class="badge">Hot</div>
                <div class="product-tumb">
                    <img src="/public/images/{{$product->image_path}}" alt="">
                </div>
                <div class="product-details">
                    <h4><a href="">{{$product->name}}</a></h4>
                    <p>{{$product->description}}</p>
                    <div class="product-bottom-details">
                        <div class="product-price">{{$product->price}}</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <button class="button-28" role="button">
                        <a href="{{ route('product.details', ['id' => $product->id]) }}">Details</a>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>
