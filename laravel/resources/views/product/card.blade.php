
<div class="container">
    <div>
        @guest
            @if ($message = Session::get('success'))
                <div class="p-4 mb-3 bg-green-400 rounded">
                    <p class="text-green-800">{{ $message }}</p>
                </div>
            @endif
        @endguest
    </div>
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
                        @auth
                            <add-to-cart :product="{{ json_encode($product) }}" :in-cart="{{ $inCart ? json_encode($inCart->toArray()) : json_encode([]) }}"></add-to-cart>
                        @endauth
                        @guest
                            <guest-to-cart :product="{{ json_encode($product) }}"></guest-to-cart>
                        @endguest
                        <button class="button-28" role="button">
                            <a href="{{ route('productDetails', ['id' => $product->id])}}">Details</a>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="pagination">
    {{$products->links('pagination::bootstrap-4')}}
</div>
