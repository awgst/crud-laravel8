@extends('layout.app')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h1>{{ $title }}</h1>
        <a href="{{ url('product/create') }}" class="btn btn-primary my-auto">Add product</a>
    </div>
    @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
    <div class="row row-cols-5">
        @foreach ($products as $product)
            <div class="col me-5 mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <div class="bnts d-flex">
                                <a href="{{ url('product/edit/'.$product->id) }}" class="card-link text-dark me-1"><i class="bi bi-pencil"></i></a>
                                <form action="{{ url('product/'.$product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="card-link text-dark btn p-0"><i class="bi bi-trash"></i></button>
                                </form>
                            </div>
                        </div>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $product->price }}</h6>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
@endsection