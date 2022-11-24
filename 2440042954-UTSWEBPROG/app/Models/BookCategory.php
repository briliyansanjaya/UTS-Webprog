<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;
    public function books(){
        return $this->belongsTo('App\Models\Book', 'book_id', 'id');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
}
