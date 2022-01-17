@extends('layouts.app')

@section('content')
@include('layouts.navlist', ['data' => $data, 'route' => $route])
    <h1>This is catalog</h1>
@endsection
