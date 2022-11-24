<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublisherController extends Controller
{
    public function showPublisher()
    {
        $publisher = User::all();
        return view('pages.publisher', [
            'title' => 'publisher',
            'publisher' => $publisher,
            'books' => book::all()
        ]);
    }

    public function showPublisherDetail(Book $book)
    {
        $data = DB::table('books')
            ->join('users', 'books.user_id', '=', 'users.UserId')
            ->where('books.user_id', '=', $book->user_id)
            ->get();
        $data = $data->all();
        // dd($data);
        return view('pages.publisherdetail', [
            'title' => $book->title,
            'book' => $book,
            'books' => $data,
        ]);
    }
}
