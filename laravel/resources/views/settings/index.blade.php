@extends('layouts.app')

@section('content')
    @if (Route::currentRouteName() == 'settings')
        @include('layouts.navlist', ['data' => $data, 'route' => $route])
    @else
        <a href="{{url()->previous()}}" class="btn btn-primary mb-3">< Back</a>
        <h1>This is create page</h1>
        <div class="container">
        <div class="row">
            <form method="post" action="">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="title">
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group mb-3">
                    <label for="description">Product Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
                </div>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group mb-3">
                    <label for="code">Product Code</label>
                    <input type="text" class="form-control" id="code" placeholder="Enter code" name="code">
                </div>
                @error('code')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                 <div class="form-group mb-3">
                    <label for="price">Product Price</label>
                    <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
                </div>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group mb-3">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Product category</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="category">
                            <option value="" selected>Select type</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @error('category')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
    @endif
@endsection
