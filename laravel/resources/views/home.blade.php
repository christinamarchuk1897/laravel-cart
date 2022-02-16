@extends('layouts.app')

@section('content')
@include('sidebar')
@include('product.card', ['products' => $products, 'inCart' => $inCart])
@endsection

