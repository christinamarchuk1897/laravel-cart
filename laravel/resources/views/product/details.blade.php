@extends('layouts.app')

@section('content')
    <div class="single-item">
        <div class="left-set">
            <img src="/public/images/{{$product->image_path}}" alt="" />
        </div>
        <div class="right-set">
            <div class="name">{{$product->name}}</div>
            <div class="price">{{$product->price}}</div>
            <div class="description">
                <p>
                    {{$product->description}}
                </p>
            </div>
            <button class="button-28">
                <a href="">Add to Card</a>
            </button>
        </div>
    </div>
@endsection
