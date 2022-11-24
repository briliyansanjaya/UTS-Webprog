<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Routing\Controller;


class BookController extends Controller
{
    public function show(Book $book)
    {
        return view('pages.bookdetail', [
            'title' => $book->title,
            'book' => $book,
        ]);
    }
}
