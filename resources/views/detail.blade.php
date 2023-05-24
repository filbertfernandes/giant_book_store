@extends('layout')

@section('title', 'Detail | ' . $book->title)

@section('content')
<div class="row justify-content-center mb-5">

        <div class="col-md-12 text-light text-center mb-3" style="background: #004C3F">
            <h3>Book Detail</h3>
        </div>

        <div class="col-md-3 d-flex justify-content-center">
            <img src="{{ $book->image }}" alt="{{ $book->title }}" height="400">
        </div>

        <div class="col-md-4">
            <p class="text-capitalize">Title : {{ $book->title }}</p>
            <p>Author : {{ $book->author }}</p>
            <p>Publisher : {{ $book->publisher->name }}</p>
            <p>Year : {{ $book->year }}</p>
            <p>Synopsis : <br>{{ $book->synopsis }}</p>
        </div>

</div>
@endsection