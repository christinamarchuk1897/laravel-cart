@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <p class="card-text"> {{$product->description}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
