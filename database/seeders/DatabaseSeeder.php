<?php

namespace Database\Seeders;

use Database\Seeders\addFAQ;
use Database\Seeders\addPost;
use Database\Seeders\addAdmin;
use Database\Seeders\addUsers;
use Database\Seeders\addTicket;
use Illuminate\Database\Seeder;
use Database\Seeders\addCategories;
use Database\Seeders\addLatestNews;
use Database\Seeders\LaratrustSeeder;

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
        $this->call(addFAQ::class);
        $this->call(addTicket::class);
    }
}
