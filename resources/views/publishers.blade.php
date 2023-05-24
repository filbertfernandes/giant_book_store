@extends('layout')

@section('title', 'Publishers')

@section('content')
<div class="row justify-content-center mb-5">

        <div class="col-md-12 text-light text-center mb-3" style="background: #004C3F">
            <h3>Publishers</h3>
        </div>

        @foreach($publishers as $publisher)
            <div class="col-md-4">
                <div class="card mb-3" style="min-height: 185px;">
                    <div class="row g-0">
                      <div class="col-md-4 d-flex align-items-center">
                        <img src="{{ $publisher->image }}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $publisher->name }}</h5>
                            <p class="card-text">{{ $publisher->address }}</p>
                            <a href="/publisher/{{ $publisher->id }}" class="btn text-light p-0" style="background: #004C3F; min-width: 50%">Detail</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        @endforeach

</div>
@endsection