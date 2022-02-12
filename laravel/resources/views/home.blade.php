@extends('layouts.app')

@section('content')
@include('sidebar')
@include('product.card', ['products' => $products, 'inCart' => isset($inCart) ? $inCart : false])
@endsection

