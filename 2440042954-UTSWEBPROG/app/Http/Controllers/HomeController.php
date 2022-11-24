<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('pages.home', [
            'title' => 'Home',
            'books' => $books
        ]);
    }
}
