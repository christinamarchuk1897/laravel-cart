
<div class="container">
    <div class="row justify-content-center">
        @foreach ($products as $key => $product)
            <div class="product-card m-2">
                <div class="badge">Hot</div>
                <div class="product-tumb">
                    <img src="{{$product->image}}" alt="">
                    {{-- /public/images/{{$product->image_path}} --}}
                </div>
                <div class="product-details">
                    <h4><a href="">{{$product->title}}</a></h4>
                    <h3>{{ $product->price }}$</h3>
                    <div class="product-bottom-details">
                        <p>{{$product->genre}}</p>
                        <p>{{$product->platform}}</p>
                        <div class="product-price"></div>
                        {{-- <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div> --}}
                    </div>
                    <div class="product-actions">
                        <add-to-cart :product="{{ json_encode($product) }}" disabled="{{ isset($inCart[$key]) && $inCart[$key]->product_id == $product->id ? true : false }}"></add-to-cart>
                        <button class="button-28" role="button">
                            <a href="{{ route('product.details', ['id' => $product->id])}}">Details</a>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
