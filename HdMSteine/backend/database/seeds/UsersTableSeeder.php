<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 'name', 'email', 'password'

        DB::table('users')->delete();
        User::create(['name'=>'Thomas', 'email'=>'t@hdm.de', 'password'=>'123456']);
        User::create(['name'=>'Manu', 'email'=>'m@hdm.de', 'password'=>'123456']);
        User::create(['name'=>'Hanna', 'email'=>'h@hdm.de', 'password'=>'123456']);

    }
}
