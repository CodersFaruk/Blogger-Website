<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=User::insert([
            'user_id' => 'admin100',
            'role_id' => 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
        ]);

        $user=User::insert([
            'user_id' => 'user100',
            'role_id' => 2,
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user@gmail.com'),
        ]);
    }
}
