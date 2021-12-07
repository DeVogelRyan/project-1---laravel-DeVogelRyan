<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class addPost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = Post::create([
            'id' => 1,
            'title' => 'The rubber ducky is awesome!',
            'content' => 'I have bought this rubber ducky and it is the best hacking device I have ever used.',
            'file' =>'rubber_ducky.jpg',
            'user_id'=> 2,
            'created_at'=> '2021-12-07 16:26:00',
            'updated_at'=> '2021-12-07 16:26:00'
        ]);
    }
}
