<?php

namespace Database\Seeders;

use Database\Seeders\addPost;
use Database\Seeders\addAdmin;
use Database\Seeders\addUsers;
use Illuminate\Database\Seeder;
use Database\Seeders\addLatestNews;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(addAdmin::class);
        $this->call(addUsers::class);
        $this->call(addPost::class);
        $this->call(addLatestNews::class);
        $this->call(addCategories::class);
    }
}
