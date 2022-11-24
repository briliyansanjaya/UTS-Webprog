<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public function users(){
        return $this->belongsTo('App\Models\User', 'user_id', 'UserId');
    }

    use HasFactory;
    public function bookcategory(){
        return $this->hasMany('App\Models\BookCategory', 'book_id', 'id');
    }
}
