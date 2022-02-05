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
                        <div class="mb-3 form__group field">
                            <input type="text" class="form__field" id="name" placeholder="Enter name" name="title">
                            <label for="name" class="form__label">Name</label>
                        </div>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6">
                        <div class="mb-3 form__group field">
                            <input type="text" class="form__field" id="description" placeholder="Enter description" name="description">
                            <label for="description" class="form__label">Description</label>
                        </div>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6">
                        <div class="mb-3 form__group field">
                            <select class="form__field" id="categories" name="category_id">
                                <option value="" selected>Select type</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <label for="categories" class="form__label">Category</label>
                        </div>
                        @error('category')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6 image">
                        <div class="form-group form__group field">
                            <input type="file" name="image" placeholder="Choose image" id="image">
                            @error('image')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col col-6">
                        <div class="mb-3 form__group field">
                            <input type="text" class="form__field" id="code" placeholder="Enter code" name="code">
                            <label for="code" class="form__label">Code</label>
                        </div>
                        @error('code')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6">
                        <div class="mb-3 form__group field">
                            <input type="text" class="form__field" id="price" placeholder="Enter price" name="price">
                            <label for="price" class="form__label">Price</label>
                        </div>
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6">
                        <div class="mb-3 form__group field">
                            <select class="form__field" id="genre" name="genre">
                                <option value="" selected>Select type</option>
                                @foreach ($genres as $genre)
                                <option value="{{$genre->id}}">{{$genre->name}}</option>
                                @endforeach
                            </select>
                            <label for="genre" class="form__label">Genre</label>
                        </div>
                        @error('genre')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6">
                        <div class="mb-3 form__group field">
                            <select class="form__field" id="platform" name="platform">
                                <option value="" selected>Select type</option>
                                @foreach ($platforms as $platform)
                                <option value="{{$platform->id}}">{{$platform->name}}</option>
                                @endforeach
                            </select>
                            <label for="platform" class="form__label">Platform</label>
                        </div>
                        @error('platform')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6">
                        <div class="mb-3 form__group field">
                            <input type="text" class="form__field" id="publisher" placeholder="Enter publisher" name="publisher">
                            <label for="publisher" class="form__label">Publisher</label>
                        </div>
                        @error('publisher')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6">
                        <div class="mb-3 form__group field">
                            <input type="text" class="form__field" id="developer" placeholder="Enter developer" name="developer">
                            <label for="developer" class="form__label">Developer</label>
                        </div>
                        @error('developer')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col col-6">
                        <div class="mb-3 form__group field">
                            <input type="text" class="form__field" id="release_date" placeholder="Enter release date" name="release_date">
                            <label for="release_date" class="form__label">Release_date</label>
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
