@extends('layouts.app')

@section('content')
    @include('layouts.navlist', ['data' => $data, 'route' => $route])
@endsection
