@extends('layouts.main')

@section('container')
<div class="container-fluid" style="background-color: #AA8B56;">
    <div class="container pb-5" >
        <h2 class="text-white font-weight-bold text-center pt-1">Book List</h2>
        <div class="row justify-content-center">
            @foreach ($books as $book)
                <div class="card p-0 mx-auto my-2" style="width: 18rem;">
                    <img src="https://source.unsplash.com/1600x1650/?{{ $book->image }}" class="card-img-top img" style="height: 400px">
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
