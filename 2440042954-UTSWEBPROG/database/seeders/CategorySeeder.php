<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'CategoryName' => 'Fiction',
        ]);
        Category::create([
            'CategoryName' => 'Comic',
        ]);
        Category::create([
            'CategoryName' => 'Romance',
        ]);
        Category::create([
            'CategoryName' => 'Novel',
        ]);
        Category::create([
            'CategoryName' => 'Comedy',
        ]);
    }
}
