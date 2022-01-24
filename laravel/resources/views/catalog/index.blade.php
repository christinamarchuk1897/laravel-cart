@extends('layouts.app')

@section('content')
    @include('sidebar', ['data' => $data, 'route' => $route])
    @include('product.card', ['products' => $products])
    @if ($products->isEmpty())
    <h1>NotFound</h1>
    @endif
@endsection
