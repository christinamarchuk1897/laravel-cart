@extends('layouts.app')

@section('content')
    <h1>This is create page</h1>
        <div class="container">
        <div class="row">
            <form>
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="productName">
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Product category</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
