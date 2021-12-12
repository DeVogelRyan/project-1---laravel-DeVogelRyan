<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class addTicket extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = Contact::create([
            'id' => 1,
            'title' => 'I have a problem',
            'content' => "My dad who is 70 years old can't login. ",
            'user_id'=> 3,
            'created_at'=> '2021-12-10 10:26:00',
            'updated_at'=> '2021-12-10 10:26:00'
        ]);
    }
}
