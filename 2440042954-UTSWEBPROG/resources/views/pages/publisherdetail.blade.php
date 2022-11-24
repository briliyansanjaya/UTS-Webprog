@extends('layouts.main')

@section('container')
<div class="container-fluid" style="background-color: #AA8B56; height: 100vh;">
    <div class="pt-3">
        <div class="container text-white p-3" style="background-color: #395144;">
            <h3>{{ $book->users->name }}</h3>
            <h3>Address - {{ $book->users->address }}</h3>
            <h3>Phone - {{  $book->users->phone  }}</h3>
            <h3>Email - {{ $book->users->email }}</h3>
        </div>

        <div class="container d-flex justify-content-center">
            @foreach ($books as $book)
                <div class="card p-0 my-2 mx-2" style="width: 18rem;">
                    <img src="https://source.unsplash.com/1600x1650/?{{ $book->image }}" class="card-img-top img" style="height: 400px" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <h6>By</h6>
                        <h5>{{ $book->author }}</h5>
                        <a href="/bookdetail/{{ $book->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
