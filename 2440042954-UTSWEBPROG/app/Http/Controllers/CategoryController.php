<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    // public function index()
    // {
    //     $categories = Category::all();
    //     return view('pages.category.index', [
    //         'title' => 'Category',
    //         'categories' => $categories
    //     ]);
    // }

    public function showCategory(Category $category){
        $data = DB::table('book_categories')
            ->join('books', 'book_categories.book_id', '=', 'books.id')
            ->where('book_categories.category_id', '=', $category->id)
            ->get();
        $data = $data->all();
        // @dd($data);
        return view('pages.category', [
            'title' => $category->CategoryName,
            'bookcategory' => $data,
        ]);
    }
}
