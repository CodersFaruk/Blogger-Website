<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=Role::insert(['name' => 'admin']);
        $user=Role::insert(['name' => 'user']);
        $suspend=Role::insert(['name' => 'suspend']);
    }
}
