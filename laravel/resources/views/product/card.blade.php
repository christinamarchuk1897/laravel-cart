
<div class="container">
    <div class="row justify-content-center">
        @foreach ($products as $product)
            <div class="product-card m-2">
                <div class="badge">Hot</div>
                <div class="product-tumb">
                    <img src="{{$product->image}}" alt="">
                    {{-- /public/images/{{$product->image_path}} --}}
                </div>
                <div class="product-details">
                    <h4><a href="">{{$product->title}}</a></h4>
                    <p>{{$product['short_description']}}</p>
                    <div class="product-bottom-details">
                        <div class="product-price"></div>
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
