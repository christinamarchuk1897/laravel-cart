@extends('layouts.app')

@section('content')
    @if (Route::currentRouteName() == 'settings')
        @include('sidebar', ['data' => $data, 'route' => $route])
    @else
        <a href="{{url()->previous()}}" class="btn back-button">
            <i class="bi bi-chevron-left">
        </i> Back</a>
        <div class="row">
            <div class="col col-9">
                <form method="post" action="" enctype="multipart/form-data" class="product-form">
                    @csrf
                    <div class="col col-6">
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="title">
                        </div>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6">
                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
                        </div>
                             @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="col col-6">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1">Category</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                                <option value="" selected>Select type</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('category')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6 image">
                        <div class="form-group">
                            <input type="file" name="image" placeholder="Choose image" id="image">
                            @error('image')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col col-6">
                        <div class="form-group mb-3">
                            <label for="code">Code</label>
                            <input type="text" class="form-control" id="code" placeholder="Enter code" name="code">
                        </div>
                        @error('code')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6">
                        <div class="form-group mb-3">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
                        </div>
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6">
                        <div class="form-group mb-3">
                            <label for="genre">Genre</label>
                            <select class="form-control" id="genre" name="genre">
                                <option value="" selected>Select type</option>
                                <option value="HZ">HZ</option>
                                {{-- @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach --}}
                            </select>
                        </div>
                        @error('genre')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6">
                        <div class="form-group mb-3">
                            <label for="platform">Platform</label>
                            <select class="form-control" id="platform" name="platform">
                                <option value="" selected>Select type</option>
                                <option value="W">WINDOWS</option>
                                {{-- @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach --}}
                            </select>
                        </div>
                        @error('platform')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6">
                        <div class="form-group mb-3">
                            <label for="publisher">Publisher</label>
                            <input type="text" class="form-control" id="publisher" placeholder="Enter publisher" name="publisher">
                        </div>
                        @error('publisher')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6">
                        <div class="form-group mb-3">
                            <label for="developer">Developer</label>
                            <input type="text" class="form-control" id="developer" placeholder="Enter developer" name="developer">
                        </div>
                        @error('developer')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6">
                        <div class="form-group mb-3">
                            <label for="release_date">Release_date</label>
                            <input type="text" class="form-control" id="release_date" placeholder="Enter release date" name="release_date">
                        </div>
                        @error('release_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 submit">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    @endif
@endsection
