@extends('layouts.main')

@section('container')
<div class="container-fluid" style="background-color: #AA8B56;">
    <div class="container pb-5">
        <h1 class="list text-white font-weight-bold text-center pt-1">Book Detail</h1>
        <div class="card my-4">
            <img src="https://source.unsplash.com/1600x1650/?{{ $book->image }}" class="card-img-top img" alt="">
            <div class="card-body">
                <p class="card-title">Title : {{ $book->title }}</p>
                <p>Author : {{ $book->author }}</p>
                <p>Publisher : {{ $book->users->name}} </p>
                <p>Phone Publisher : {{ $book->users->phone }}</p>
                <p>Year : {{ $book->year }}</p>
                <p>Synopsis : </p>
                <p>{{ $book->synopsis }}</p>
        </div>
    </div>
</div>
@endsection
