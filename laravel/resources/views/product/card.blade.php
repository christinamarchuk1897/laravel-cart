
<div class="container">
    <div class="row justify-content-center">
        @foreach ($products as $product)
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <h5 class="card-title">{{$product['title']}}</h5>
                    <p class="card-text"> {{$product['description']}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
