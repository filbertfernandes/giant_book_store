@extends('layout')

@section('title', 'Publisher | ' . $publisher->name)

@section('content')
<div class="row justify-content-center mb-5">
        <div class="col-md-12 text-light mb-3 p-1" style="background: #004C3F">
            <div class="row">
                <div class="col-md-2 d-flex align-items-center justify-content-center ms-3">
                    <img src="{{ $publisher->image }}" alt="publisher_logo" height="100" width="100">
                </div>
    
                <div class="col-md-8">
                    <h2>{{ $publisher->name }}</h2>
                    <p>{{ $publisher->phone }}<br>{{ $publisher->email }}<br>{{ $publisher->address }}</p>
                </div>
            </div>
        </div>

        @foreach($books as $book)
            <div class="col-md-3 mb-3 border">
                <div class="card">
                    <img src="{{ $book->image }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">{{ $book->title }}</h5>
                        <p class="card-text">by {{ $book->author }}</p>
                        <div class="d-flex justify-content-center">
                            <a href="/detail/{{ $book->id }}" class="btn text-light" style="background: #004C3F; min-width: 75%">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
</div>
@endsection