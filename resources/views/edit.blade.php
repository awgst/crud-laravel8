@extends('layout.app')
@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ url('product/'.$product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Product name" value="{{ $product->name }}">
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Product price" value="{{ $product->price }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="3" name="description" placeholder="Product description">{{ $product->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection