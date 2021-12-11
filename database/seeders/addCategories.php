<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class addCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create([
            'title'=>'networking'
        ]);

        $category1 = Category::create([
            'title'=>'cybersecurity'
        ]);

        $category2 = Category::create([
            'title'=>'policies'
        ]);

    }
}
