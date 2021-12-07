<?php

namespace Database\Seeders;

use App\Models\LatestNews;
use Illuminate\Database\Seeder;

class addLatestNews extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = LatestNews::create([
            'id' => 1,
            'title' => 'Brits bedrijf demonstreert humanoïde robot met levensechte gezichtsuitdrukkingen',
            'content' => 'De Engelse ontwerper en fabrikant van humanoïde robots Engineered Arts pakt uit met een robot die levensechte gezichtsuitdrukkingen maakt.',
            'file' =>'Robot.jpg',
            'user_id'=> 1,
            'created_at'=> '2021-12-08 16:26:00',
            'updated_at'=> '2021-12-08 16:26:00'
        ]);
    }
}
