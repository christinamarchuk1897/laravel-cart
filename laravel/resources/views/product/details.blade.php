@extends('layouts.app')

@section('content')
    <div class="single-item">
        <div class="left-set">
            {{-- <img src="/public/images/{{$product->image}}" alt="" /> --}}
            <img src="{{$product->image}}" alt="" />
        </div>
        <div class="right-set">
            <div class="name">{{$product->title}}</div>
            {{-- <div class="price">{{$product->price}}</div> --}}
            <div class="description">
                <p>
                    {{$product->description}}
                </p>
            </div>
            <add-to-cart :product="{{ json_encode($product) }}" :in-cart="{{ $inCart}}"></add-to-cart>
        </div>
    </div>
@endsection
