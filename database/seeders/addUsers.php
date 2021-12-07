<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class addUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $user = User::create([
                'name' => 'ryan',
                'email' => 'ryan@gmail.com',
                'password' => Hash::make('12345678'),
                'date_of_birth' =>'2003-05-08',
                'profile_img'=> 'https://avatars.dicebear.com/api/bottts/ryan.svg'
            ]);
            $user->attachRole('user');
            event(new Registered($user));

            $user1 = User::create([
                'name' => 'tom',
                'email' => 'tom@gmail.com',
                'password' => Hash::make('12345678'),
                'bio'=>'Hi my name is tom and I love networking.',
                'date_of_birth' =>'2005-10-08',
                'profile_img'=> 'https://avatars.dicebear.com/api/initials/tom.svg'
            ]);
            $user1->attachRole('user');
            event(new Registered($user1));

            $user2 = User::create([
                'name' => 'test',
                'email' => 'test@gmail.com',
                'password' => Hash::make('12345678'),
                'bio'=>'Rather too fat in the coffin than ever miss a party.',
                'date_of_birth' =>'2001-02-18',
                'profile_img'=> 'https://avatars.dicebear.com/api/initials/test.svg'
            ]);
            $user2->attachRole('user');
            event(new Registered($user2));

            $user3 = User::create([
                'name' => 'test1',
                'email' => 'test1@gmail.com',
                'password' => Hash::make('12345678'),
                'bio'=>'I am a test user and I love to communicate',
                'date_of_birth' =>'2004-05-09',
                'profile_img'=> 'https://avatars.dicebear.com/api/miniavs/test1.svg'
            ]);
            $user3->attachRole('user');
            event(new Registered($user3));

    }
}
