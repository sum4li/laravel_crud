<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [[
            'name'=>'admin',
            'email'=>'admin@mail.com',
            'password'=>'123456'
        ]];

        foreach($user as $row)
        {
            User::create([
                'name'=>$row['name'],
                'email'=>$row['email'],
                'password'=>$row['password']
            ]);
        }
    }
}
