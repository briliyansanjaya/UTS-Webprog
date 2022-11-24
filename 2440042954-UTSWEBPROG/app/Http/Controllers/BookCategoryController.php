<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Http\Requests\StoreBookCategoryRequest;
use App\Http\Requests\UpdateBookCategoryRequest;

class BookCategoryController extends Controller
{

    public function index()
    {
        $bookcategories = BookCategory::all();
        return view('bookcategory.index', [
            'title' => 'BookCategory',
            'bookcategories' => $bookcategories
        ]);
    }
}
