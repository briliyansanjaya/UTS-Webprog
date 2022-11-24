@extends('layouts.main')

@section('container')
<div class="container-fluid" style="background-color: #AA8B56; height: 1300px;">
    <div class="container pb-5">
        <h2 class="list text-white font-weight-bold text-center pt-1">{{ $title }}</h2>
        <div class="row justify-content-center">
            @foreach($bookcategory as $book)
                <div class="card p-0 my-2 mx-2" style="width: 18rem;">
                    <img src="https://source.unsplash.com/1600x1650/?{{ $book->image }}" class="card-img-top" style="height: 400px" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <h6 class="card-text">By</h6>
                        <h5 class="card-text">{{ $book->author }}</h5>
                        <a href="/bookdetail/{{ $book->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

{{-- <div class="row p-2">
    <h1>{{ $title }}</h1>
        @foreach($bookcategory as $book)
        <div class="col-md-3 p-0">
            <div class="card mb-2" style="">
                <img src="{{ $book->image }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">By</p>
                    <p class="card-text">{{ $book->author }}</p>
                    <a href="/bookdetail/{{ $book->id }}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
</div> --}}

