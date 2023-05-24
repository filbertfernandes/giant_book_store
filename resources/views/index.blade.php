@extends('layout')

@section('title', 'Home')

@section('content')
<div class="row justify-content-center mb-5">

        <div class="col-md-12 text-light text-center mb-3" style="background: #004C3F">
            <h3>Book List</h3>
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